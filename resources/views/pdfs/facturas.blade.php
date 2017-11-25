<!DOCTYPE html>
<html>
<head>
	<title>Facturas</title>
</head>
<body>
	<img src="https://www.masterweb.la/wp-content/uploads/2015/08/logo-masterweb.jpg">
	<h1>Listado de Facturas</h1>
	@foreach($facturas as $factura)
		Número : {{$factura->numero}} <br> 
		Descripción: {!!$factura->detalles!!} <br> 
		Valor: ${{number_format($factura->valor,2)}}<br>
		<hr>
	@endforeach
</body>
</html>