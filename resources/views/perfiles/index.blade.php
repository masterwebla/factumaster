@extends('master')
@section('titulo', 'Listado de Perfiles')

@section('contenido')
	<div class="container text-center">
		<h1>Listado de Perfiles</h1>
		<a class="btn btn-success" href="{{route('perfiles.create')}}">Crear Nuevo Perfil</a>
		<hr>
		<table class="table table-striped table-bordered table-hover">
		    <thead>
		      <tr>
		        <th>Editar</th>
		        <th>Borar</th>
		        <th>Nombre</th>
		      </tr>
		    </thead>
		    <tbody>
			@foreach($perfiles as $perfil)
		      <tr>
		        <td>
		        	<a class="btn btn-warning" href="{{route('perfiles.edit',$perfil->id)}}">
		        		<i class="fa fa-pencil-square fa-2x"></i>
		        	</a>
		        </td>
		        <td>
		        	{!! Form::open(['route' => ['perfiles.destroy', $perfil->id]]) !!}
		        		<input type="hidden" name="_method" value="DELETE">
        				<button onClick="return confirm('Eliminar perfil?')" class="btn btn-danger">
        					<i class="fa fa-trash-o fa-2x"></i>
        				</button>
        			{!! Form::close() !!}
		        </td>
		        <td>{{$perfil->nombre}}</td>
		      </tr>
			@endforeach
		    </tbody>
		</table>
		<hr>
	</div>
@endsection