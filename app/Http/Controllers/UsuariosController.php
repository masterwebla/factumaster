<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['except'=>'update']);
    }
    
    public function index()
    {
        //
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
        //Validar la información
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]); 

        //Actualizar la informacion
        $usuario = User::find($id);
        $usuario->name = $request->get("name");
        $usuario->email = $request->get("email");
        if(empty($request->password)){
            $usuario->password = $usuario->password;
        }
        else{
            $usuario->password = bcrypt($request->password);
        }
        $usuario->save();

        $mensaje = $usuario?'Datos actualizados correctamente':'No pudieron actualizarse los datos';
        return redirect()->route('clientes.index')->with('mensaje',$mensaje); 
        
    }

    public function destroy($id)
    {
        //
    }
}
