<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('perfiles', 'PerfilesController');
Route::resource('clientes', 'ClientesController');
Route::get('buscarcliente',['as'=>'buscarcliente', 'uses'=>'ClientesController@autoComplete']);

Route::resource('facturas', 'FacturasController');
Route::resource('usuarios', 'UsuariosController');

//Ruta para exportar un PDF de Facturas
Route::get('pdf',['as'=>'facturaspdf','uses'=>'PdfController@facturaspdf']);

//Ruta para exportar a Excel los clientes
Route::get('exportarclientes',['as'=>'exportarclientes','uses'=>'ExcelController@exportarclientes']);

//Ruta para importar clientes desde Excel
Route::get('importarclientes',['as'=>'importarclientes','uses'=>'ExcelController@importarclientes']);

//Ejemplos JQuery
Route::get('jquery',function (){
	return view('jquery');
});

//Rutas para hacer JQuery Ajax
Route::get('ajax','AjaxController@mostrarClientes');
Route::get('selectfacturas','AjaxController@mostrarFacturas');
Route::resource('productos','ProductosController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Rutas para el carrito de compras

Route::get('carrito',['as'=>'carrito','uses'=>'CarritoController@show']);
Route::get('carrito/agregar/{id}',['as'=>'carrito-agregar','uses'=>'CarritoController@add']);
Route::get('carrito/borrar/{id}',['as'=>'carrito-borrar','uses'=>'CarritoController@delete']);
Route::get('carrito/vaciar',['as'=>'carrito-vaciar','uses'=>'CarritoController@trash']);
Route::get('carrito/actualizar/{id}/{cantidad?}',['as'=>'carrito-actualizar','uses'=>'CarritoController@update']);

Route::get('ordenar',['as'=>'ordenar','uses'=>'CarritoController@guardarPedido']);