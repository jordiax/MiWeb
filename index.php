<?php require 'templates/template.php'; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MF0491: prueba práctica de la parte cliente.">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="js/index.js"></script>
		<title>Página principal</title>
	</head>
	<body>
		<header id="cabecera">
			<div class="flex-container">
				<div class='flex2 cabecera'>
					<figure><img src="img/logo-transparent.png" alt="logo" id="logo"></figure>
				</div>
				<div class='flex2 cabecera'>
					<h1>Título</h1>
				</div>
				<div id="dLogin" class='flex2 cabecera'>				
					<a href="login.php">Login</a>
					<figure><img src="img/login.png"></figure>
					<span> / </span>
					<a href="registro.php">Registro</a>
					<figure><img src="img/registro.png"></figure>
				</div>
			</div>
			<div class="flex-container">
				<div class="navegacion migas flex2">
					<span>Inicio</span>
				</div>
				<div class="navegacion flex2" id="dBuscar">
					<form action="/search" id="fBuscar">
					  <!-- <label for="iBuscar">Buscar:</label> -->
					  <input type="search" id="iBuscar" name="b" placeholder="Ingrese su búsqueda">
					  <img src="img/lupa.png" alt="Buscar" class="buscar" onclick="buscar()">
					</form>
				</div>
				<div class="navegacion menu flex2">
					<?php menu('ini'); ?>
				</div>
			</div>
		</header>
		<h1>Inicio</h1>
		<div id="cookies" class="modal">
			<div class="contenido-modal">
				<span>Debes aceptar las cookies para poder acceder a este sitio web.</span>
				<br>
				<input type="checkbox" id="aceptar">
				<label>Marca para aceptar las cookies.</label>
				<br>
				<button onclick="evaluar()">Aceptar</button>
				<br>
				<output id="mensaje"></output>
			</div>
		</div>
		<script>
			function buscar()
			{
				fBuscar.submit();
			}
		</script>
	</body>
</html>