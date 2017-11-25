@extends('master')
@section('titulo','Crear un Cliente')

@section('contenido')
	<div class="container text-center">
		<h1>Crear Cliente</h1>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif		

		{!! Form::open(['route' => 'clientes.store']) !!}
			<div class="form-group">
				{!! Form::text('nombre', null, array(
						'class'=>'form-control',
						'required'=>'required',
						'placeholder'=>'Nombre del Cliente...'
					)) 
				!!}
			</div>
			<div class="form-group">
				{!! Form::text('nit', null, array(
						'class'=>'form-control',
						'placeholder'=>'Nit del cliente...'
					)) 
				!!}
			</div>
			<div class="form-group">
				{!! Form::text('direccion', null, array(
						'class'=>'form-control',
						'placeholder'=>'Direccion del cliente...'
					)) 
				!!}
			</div>
			<div class="form-group">
				{!! Form::number('telefono', null, array(
						'class'=>'form-control',
						'required'=>'required',
						'placeholder'=>'Telefono del cliente...'
					)) 
				!!}
			</div>
			<div class="form-group">
				{!! Form::email('email', null, array(
						'class'=>'form-control',
						'required'=>'required',
						'placeholder'=>'Email del cliente...'
					)) 
				!!}
			</div>
			{!! Form::submit('Guardar Cliente', array('class'=>'btn btn-primary'))!!}
		{!! Form::close() !!}
		<hr>
	</div>
@endsection