@extends('master')
@section('titulo', 'Carrito')
@section('contenido')
	<div class="container text-center">
		<h1>Carrito de Productos</h1>
		@if(count($carrito))
			<p>
				<a href="{{route('carrito-vaciar')}}" class="btn btn-danger">Vaciar Carrito
					<i class="fa fa-trash"></i>
				</a>
			</p>
			<table class="table table-striped table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>Nombre</th>
			        <th>Precio * Unidad</th>
			        <th>Cantidad</th>
			        <th>Total</th>
			        <th>Borrar</th>
			      </tr>
			    </thead>
			    <tbody>
				@foreach($carrito as $item)
			      <tr>
			        <td>{{$item->nombre}}</td>
			        <td>${{number_format($item->precio,0)}}</td>
			        <td>
			        	<input type="number" min="1" max="50" value="{{ $item->cantidad }}" 
							id="producto_{{ $item->id }}">
							<a href="#" class="btn btn-warning btn-update-item" data-href="{{ route('carrito-actualizar', $item->id) }}" data-id="{{ $item->id }}">
								<i class="fa fa-refresh"></i>
							</a>
			        </td>
			        <td>${{$item->precio*$item->cantidad}}</td>
			        <td>
			        	<a href="{{route('carrito-borrar',$item->id)}}">
			        		<i class="fa fa-remove fa-2x"></i>
			        	</a>
			        </td>
			      </tr>
				@endforeach
			    </tbody>
			</table>
			<h3><span class="label label-success">${{number_format($total)}}</span></h3>
		@else
			<h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
		@endif
		<hr>
		<p>
			<a class="btn btn-info" href="{{route('productos.index')}}"><i class="fa fa-chevron-circle-left"></i> Seguir Agregando</a>
			@if(count($carrito))
				<a class="btn btn-success" href="{{route('ordenar')}}">Ordenar <i class="fa fa-chevron-circle-right"></i></a>
			@endif
		</p>
	</div>
@endsection