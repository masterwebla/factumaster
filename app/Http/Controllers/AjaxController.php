<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Factura;

class AjaxController extends Controller
{
    //función para mostrar los clientes
    public function mostrarClientes(){
    	$clientes = Cliente::all();
    	return view('ajax.selectdinamico',compact('clientes'));
    }

    //Función para mostrar las facturas de un cliente
    public function mostrarFacturas(Request $request){
    	$idcliente = $request->get('idcliente');
    	$facturas = Factura::where('idcliente',$idcliente)->get();
    	return response()->json($facturas);
    }
}
