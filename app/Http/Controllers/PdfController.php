<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;

class PdfController extends Controller
{
    public function facturaspdf(){
    	$facturas = Factura::all();
    	$pdf = \App::make('dompdf.wrapper');		
		$vista = \View('pdfs.facturas',compact('facturas'))->render();
		$pdf->loadHTML($vista);
		return $pdf->download('facturas.pdf');
    }
}
