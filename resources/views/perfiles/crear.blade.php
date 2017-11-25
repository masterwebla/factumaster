@extends('master')
@section('titulo','Crear un Perfil')

@section('contenido')
	<div class="container text-center">
		<h1>Crear Perfil</h1>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif		

		{!! Form::open(['route' => 'perfiles.store']) !!}
			<div class="form-group">
				{!! Form::text('nombre', null, array(
						'class'=>'form-control',
						'required'=>'required',
						'placeholder'=>'Nombre del perfil...'
					)) 
				!!}
			</div>
			{!! Form::submit('Guardar Perfil', array('class'=>'btn btn-primary'))!!}
		{!! Form::close() !!}
		<hr>
	</div>
@endsection