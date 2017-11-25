<?php

namespace App\Http\Controllers;

use App\Mail\FacturaCreada;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Factura;
use App\Cliente;
use App\Formapago;
use App\Estadofactura;

class FacturasController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['except'=>'index']);
    }

    //Listar todas las facturas
    public function index()
    {
        $facturas = Factura::paginate(10);
        return view('facturas.index',compact('facturas'));
    }
    
    public function create()
    {        
        $clientes = Cliente::orderBy('nombre','asc')->pluck('nombre','id');
        $formas = Formapago::orderBy('nombre','asc')->pluck('nombre','id');
        $estados = Estadofactura::orderBy('nombre','asc')->pluck('nombre','id');
        return view('facturas.crear',compact('clientes','formas','estados'));
    }

    public function store(Request $request)
    {
        //Validar la informacion ingresada
        $this->validate($request, [
            'numero' => 'required|numeric',
            'valor' => 'required|numeric',
            'detalles' => 'required',
            'idcliente' => 'required',
            'idestado' => 'required',
            'idforma' => 'required',
            'archivo' => 'mimes:jpeg,png'
        ]);   

        //Cambiar nombre y Guardar el archivo
        $now = new \DateTime();
        $fecha = $now->format('Ymd-His');
        $numero = $request->get('numero');
        $archivo = $request->file('archivo');
        $nombre = "";

        if($archivo){
            $extension = $archivo->getClientOriginalExtension();
            $nombre = "factura-".$numero."-".$fecha.".".$extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }

        //Insertar la Información en la tabla
        $factura = Factura::create([
            'numero'=>$request->get('numero'),
            'detalles'=>$request->get('detalles'),
            'valor'=>$request->get('valor'),
            'archivo'=>$nombre,
            'idcliente'=>$request->get('idcliente'),
            'idestado'=>$request->get('idestado'),
            'idforma'=>$request->get('idforma')
        ]);

        //Generar Mail de notificación
        $nrofactura = $request->get('numero');
        $valorfactura = $request->get('valor');
        $emailto = Auth::user()->email;
        Mail::to($emailto)->send(new FacturaCreada($nrofactura,$valorfactura));

        $mensaje = $factura?'Factura creada correctamente':'La factura no pudo crearse';
        return redirect()->route('facturas.index')->with('mensaje',$mensaje);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $factura = Factura::find($id);
        $clientes = Cliente::orderBy('nombre','asc')->pluck('nombre','id');
        $formas = Formapago::orderBy('nombre','asc')->pluck('nombre','id');
        $estados = Estadofactura::orderBy('nombre','asc')->pluck('nombre','id');
        return view('facturas.editar',compact('factura','clientes','formas','estados'));
    }

    public function update(Request $request, $id)
    {
        //Validar la informacion ingresada
        $this->validate($request, [
            'numero' => 'required|numeric',
            'valor' => 'required|numeric',
            'detalles' => 'required',
            'idcliente' => 'required',
            'idestado' => 'required',
            'idforma' => 'required',
            'archivo' => 'mimes:jpeg,png'
        ]);   

        //Cambiar nombre y Guardar el archivo
        $now = new \DateTime();
        $fecha = $now->format('Ymd-His');
        $numero = $request->get('numero');
        $archivo = $request->file('archivo');
        $nombre = "";

        if($archivo){            
            $extension = $archivo->getClientOriginalExtension();
            $nombre = "factura-".$numero."-".$fecha.".".$extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }

        //actualizar la nueva informacion
        $factura = Factura::find($id);
        $factura->detalles = $request->get('numero');
        $factura->detalles = $request->get('detalles');
        $factura->valor = $request->get('valor');
        if($archivo){            
            $factura->archivo = $nombre;
        }
        $factura->idcliente = $request->get('idcliente');
        $factura->idestado = $request->get('idestado');
        $factura->idforma = $request->get('idforma');
        $factura->save();

        return redirect()->route('facturas.index');

    }

    public function destroy($id)
    {
        $factura = Factura::find($id);
        $archivo = $factura->archivo;
        \Storage::delete($archivo);
        $factura->delete();

        return redirect()->route('facturas.index');   
    }
}
