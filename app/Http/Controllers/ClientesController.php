<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{    
    public function __construct(){
        $this->middleware('admin',['except'=>'index']);
    }

    //Listar todos los clientes
    public function index(Request $request)
    {
        $clientes = Cliente::buscador($request->nombre)->orderBy('id',$request->id)->paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    //Llamar la vista encargada de crear un nuevo cliente
    public function create()
    {
        return view('clientes.crear');
    }

    //Recibir los datos y guardarlos en la tabla perfiles
    public function store(Request $request)
    {
        //Validar la información
        $this->validate($request, [
            'nombre' => 'required',
            'nit' => 'required|unique:clientes',
            'telefono' => 'required|numeric',
            'direccion' => 'required',
            'email' => 'required|email|unique:clientes'
        ]);        

        //Guardar esa información en la tabla
        $cliente = Cliente::create([
            'nombre' => $request->get('nombre'),
            'nit' => $request->get('nit'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'email' => $request->get('email')
        ]);

        return redirect()->route('clientes.index');        
    }

    //Función para mostrar un formulario de edición
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.editar',compact('cliente'));
    }

    //Funcion para actualizar
    public function update(Request $request, $id)
    {
        //Validar la información
        $this->validate($request, [
            'nombre' => 'required',
            'nit' => 'required|unique:clientes',
            'telefono' => 'required|numeric',
            'direccion' => 'required',
            'email' => 'required|email|unique:clientes'
        ]);   

        //Actualizar la informacion
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->get("nombre");
        $cliente->nit = $request->get("nit");
        $cliente->direccion = $request->get("direccion");
        $cliente->telefono = $request->get("telefono");
        $cliente->email = $request->get("email");
        $cliente->save();

        return redirect()->route('clientes.index'); 
    }

    //Función para borrar un cliente
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index');   
    }

    //Función para buscar clientes
    public function autoComplete(Request $request) {
        $query = $request->get('term');        
        $clientes=Cliente::where('nombre','LIKE','%'.$query.'%')->get();
        
        $data=array();
        foreach ($clientes as $cliente) {
            $data[]=array('value'=>$cliente->nombre);
        }
        
        if(count($data))
             return $data;
        else
            return ['value'=>'No hay resultados'];
    }

}
