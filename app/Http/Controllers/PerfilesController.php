<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PerfilesController extends Controller
{

    //Listar todos los perfiles
    public function index()
    {
        $perfiles = Perfil::all();
        return view('perfiles.index', compact('perfiles'));
    }

    //Llamar la vista encargada de crear un nuevo perfil
    public function create()
    {
        return view('perfiles.crear');
    }

    //Recibir los datos y guardarlos en la tabla perfiles
    public function store(Request $request)
    {
        //Validar la información
        $this->validate($request, [
            'nombre' => 'required|unique:perfiles'
        ]);        

        //Guardar esa información en la tabla
        $perfil = Perfil::create([
                'nombre' => $request->get('nombre')
        ]);

        return redirect()->route('perfiles.index');
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $perfil = Perfil::find($id);
        return view('perfiles.editar',compact('perfil'));
    }

    public function update(Request $request, $id)
    {
        //Validar la información
        $this->validate($request, [
            'nombre' => 'required|unique:perfiles'
        ]); 

        //Actualizar la informacion
        $perfil = Perfil::find($id);
        $perfil->nombre = $request->get("nombre");
        $perfil->save();

        return redirect()->route('perfiles.index');        

    }

    public function destroy($id)
    {
        $perfil = Perfil::find($id);
        $perfil->delete();

        return redirect()->route('perfiles.index');   
    }
}
