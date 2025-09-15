<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MF0491: prueba práctica de la parte cliente.">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<script src="js/login.js"></script>
		<title>Página login</title>
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
					<a href="#">Login</a>
					<figure><img src="img/login.png"></figure>
					<span> / </span>
					<a href="registro.php">Registro</a>
					<figure><img src="img/registro.png"></figure>
				</div>
			</div>
			<div class="flex-container">
				<div class="navegacion migas flex2">
					<a href="./index.php" class="migas">Inicio</a><span> / Login</span>
				</div>
				<div class="navegacion flex2" id="dBuscar">
					<form action="/search" id="fBuscar">					  
					  <input type="search" id="iBuscar" name="b" placeholder="Ingrese su búsqueda">
					  <img src="img/lupa.png" alt="Buscar" class="buscar" onclick="buscar()">
					</form>
				</div>
				<div class="navegacion menu flex2">
					<?php menu('ini'); ?>
				</div>
			</div>
		</header>
        <form>
			<div>
				<label for="usuario">Usuario:</label>
				<input type="text" id="usuario" name="usuario" required>
				<br>
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required>
			</div>		
			<div class="botones">
				<input type="submit" value="Aceptar" class="lboton" id="aceptar"/>
				<input type="reset" value="Cancelar" class="lboton" id="cancelar"/>
			</div>
		</form>       
    </body>
</html>