@extends('master')
@section('titulo', 'Listado de Facturas')

@section('contenido')
	<div class="container text-center">
		<h1>Listado de Facturas</h1>
		<a class="btn btn-success" href="{{route('facturas.create')}}">Crear Nueva Factura</a>
		<a class="btn btn-info" href="{{route('facturaspdf')}}" target="blank">Generar PDF</a>
		<hr>
		<table class="table table-striped table-bordered table-hover">
		    <thead>
		      <tr>
		        <th>Editar</th>
		        <th>Borrar</th>
		        <th>Numero</th>
		        <th>Cliente</th>
		        <th>Nit</th>
		        <th>Valor</th>
		        <th>Archivo</th>
		      </tr>
		    </thead>
		    <tbody>
			@foreach($facturas as $factura)
		      <tr>
		        <td>
		        	<a class="btn btn-warning" href="{{route('facturas.edit',$factura->id)}}">
		        		<i class="fa fa-pencil-square fa-2x"></i>
		        	</a>
		        </td>
		        <td>
		        	{!! Form::open(['route' => ['facturas.destroy', $factura->id]]) !!}
		        		<input type="hidden" name="_method" value="DELETE">
        				<button onClick="return confirm('Eliminar factura?')" class="btn btn-danger">
        					<i class="fa fa-trash-o fa-2x"></i>
        				</button>
        			{!! Form::close() !!}
		        </td>
		        <td>{{$factura->numero}}</td>
		        <td>{{$factura->cliente->nombre}}</td>
		        <td>{{$factura->cliente->nit}}</td>
		        <td>${{number_format($factura->valor)}}</td>
		        <td><img src="{{asset('archivos/'.$factura->archivo.'')}}" width="150"></td>
		      </tr>
			@endforeach
		    </tbody>
		</table>
		{{ $facturas->links() }}
		<hr>
	</div>
@endsection