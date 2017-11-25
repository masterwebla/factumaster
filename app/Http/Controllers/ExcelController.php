<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Cliente;

class ExcelController extends Controller
{
    public function exportarclientes(){
    	Excel::create('clientes', function($excel) {
    		$excel->sheet('clientes',function($sheet){
    			$clientes = Cliente::all();
    			$sheet->fromArray($clientes);
    		});
		})->export('xlsx');
    }

    public function importarclientes(){    	

    	Excel::load('clientes.xlsx', function($reader) {
    		foreach($reader->get() as $cliente){
    			Cliente::create([
    				'nombre' => $cliente->nombre,
    				'nit' => $cliente->nit,
    				'direccion' => $cliente->direccion,
    				'telefono' => $cliente->telefono,
    				'email' => $cliente->email
    			]);
    		}
		});

		return redirect()->route('clientes.index')
    }
}
