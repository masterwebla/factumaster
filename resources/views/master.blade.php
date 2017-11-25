<!DOCTYPE html>
<html>
<head>
	<title>FactuMaster - @yield('titulo')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
	@include('secciones.menu')
	@if(\Session::has('mensaje'))
		@include('secciones.mensajes')
	@endif
	@yield('contenido')
	@include('secciones.footer')
	@if(Auth::check())
		@include('usuarios.modal')
	@endif
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>