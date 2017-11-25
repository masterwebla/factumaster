<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['except'=>'index']);
    }

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',compact('productos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
