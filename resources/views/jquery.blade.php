<!DOCTYPE html>
<html>
<head>
	<title>Mis primeros JQuery</title>
	<script src="{{asset('js/jquery.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('button').click(function(){
				$('#hola').toggle(3000);
			});			
		});
			function mostrar(){
				var texto = $('#texto').val();
				$('#textoingresado').html(texto);
			}
	</script>
</head>
<body>
	<h1>Mi primer JQuery</h1>
	<input type="text" name="texto" id="texto" onkeyup="mostrar()">
	<div id="textoingresado"></div>

	<button>Ocultar</button>
	<div id="hola">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</body>
</html>