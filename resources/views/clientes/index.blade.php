@extends('master')
@section('titulo', 'Listado de Clientes')

@section('contenido')
	<div class="container text-center">
		<h1>Listado de Clientes</h1>
		<a class="btn btn-success" href="{{route('clientes.create')}}">Crear Nuevo Cliente</a>
		<a class="btn btn-info" href="{{route('exportarclientes')}}">Exportar en Excel</a>
		<hr>
		<!-- FORMULARIO DE BUSQUEDA -->
		{!!Form::open(['route'=>'clientes.index','method'=>'GET','class'=>'navbar-form']) !!}
			<div class="form-group">
				{!!Form::text('nombre',null,['class'=>'form-control','id'=>'nombre','placeholder'=>'Buscar Cliente']) !!}
				{!!Form::submit('Buscar Cliente', array('class'=>'btn btn-primary'))!!}
			</div>
		{!!Form::close() !!}
		<!-- FIN - FOMRULARIO DE BUSQUEDA -->
		<table class="table table-striped table-bordered table-hover">
		    <thead>
		      <tr>
		        <th>Editar</th>
		        <th>Borrar</th>
		        <th>Nombre</th>
		        <th>Nit</th>
		        <th>Telefono</th>
		        <th>Email</th>
		      </tr>
		    </thead>
		    <tbody>
			@foreach($clientes as $cliente)
		      <tr>
		        <td>
		        	<a class="btn btn-warning" href="{{route('clientes.edit',$cliente->id)}}">
		        		<i class="fa fa-pencil-square fa-2x"></i>
		        	</a>
		        </td>
		        <td>
		        	
		        </td>
		        <td>{{$cliente->nombre}}</td>
		        <td>{{$cliente->nit}}</td>
		        <td>{{$cliente->telefono}}</td>
		        <td>{{$cliente->email}}</td>
		      </tr>
			@endforeach
		    </tbody>
		</table>
		{{ $clientes->links() }}
		<hr>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            src = "{{ route('buscarcliente') }}";
            $("#nombre").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: src,
                        dataType: "json",
                        data: {
                            term : request.term
                        },
                        success: function(data){
                            response(data);             
                        }
                    });
                },    
            });
        });
    </script>
@endsection