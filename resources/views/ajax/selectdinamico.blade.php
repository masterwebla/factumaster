<!DOCTYPE html>
<html>
<head>
	<title>Select Dinamico</title>
	<script src="{{ asset('js/jquery.js') }}"></script>
</head>
<body>
	<h1>Select Dinamico</h1>
	Clientes:
	<select name="clientes" id="clientes" onchange="mostrarFacturas()">
		<option value="">Seleccionar el cliente</option>
		@foreach($clientes as $cliente)
			<option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
		@endforeach
	</select>
	
	Facturas:
	<select name="facturas" id="facturas">
		
	</select>

	<script src="{{asset('js/funciones.js')}}"></script>
</body>
</html>