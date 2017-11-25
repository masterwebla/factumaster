<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Pedido;
use Session;

class CarritoController extends Controller
{
    
    //Función para crear la variable de sesión
    public function __construct(){
    	if(!Session::has('carrito')) Session::put('carrito',array());
    }

    //Función para mostrar la vista del carrito de compras
    public function show(){
    	$carrito = Session::get('carrito');
        $total = $this->total();
    	return view('carrito',compact('carrito','total'));
    }

    //Función para agregar items al carrito de compras
    public function add($id){
    	$carrito = Session::get('carrito');
    	$producto = Producto::find($id);
    	$producto->cantidad = 1;
    	$carrito[$producto->id] = $producto;
    	Session::put('carrito',$carrito);
    	//return Session::get('carrito');
    	return redirect()->route('carrito');
    }

    //Función para borrar un item
    public function delete($id){
    	$carrito = Session::get('carrito');
    	unset($carrito[$id]);
    	Session::put('carrito',$carrito);
    	return redirect()->route('carrito');
    }

    //Función para vaciar el carrito de compras
    public function trash(){
    	Session::forget('carrito');
    	return redirect()->route('carrito');
    }

    //Función para actualizar una cantidad en el carrito
    public function update($id,$cantidad){
    	$carrito = Session::get('carrito');
    	$producto = Producto::find($id);
    	$carrito[$producto->id]->cantidad = $cantidad;
    	Session::put('carrito',$carrito);
    	return redirect()->route('carrito');
    }

    //Función para calcular el total
    private function total(){
       $carrito = Session::get('carrito');
       $total = 0;
       foreach($carrito as $item){
            $total+= $item->precio * $item->cantidad;
       }
       return $total;
    }

    //Función para guardar el pedido
    public function guardarPedido(){
        $carrito = Session::get('carrito');
        if(count($carrito)){
            $now = new \DateTime();
            $numero = $now->format('Ymd-His');
            foreach($carrito as $producto){
                $this->guardarItem($producto,$numero);
            }
            Session::forget('carrito');
        }
        return "Pedido guardado";
    }

    protected function guardarItem($producto,$numero){
        $productoguardado = Pedido::create([
            'numero' => $numero,
            'idproducto' => $producto->id,
            'cantidad' => $producto->cantidad,
            'precio' => $producto->precio * $producto->cantidad
        ]);
    }

}
