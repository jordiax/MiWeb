<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MF0491: prueba práctica de la parte cliente.">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="js/index.js"></script>
		<title>Contacto</title>
	</head>
	<body>
		<header>
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
					<a href="./index.php" class="migas">Inicio</a><span> / Contacto</span>
				</div>
				<div class="navegacion flex2" id="dBuscar">
					<form action="/search" id="fBuscar">
					  <!-- <label for="iBuscar">Buscar:</label> -->
					  <input type="search" id="iBuscar" name="b" placeholder="Ingrese su búsqueda">
					  <img src="img/lupa.png" alt="Buscar" class="buscar" onclick="buscar()">
					</form>
				</div>
				<div class="navegacion menu flex2">
					<menu class="menu">
						<li><a href="index.php" class="item-menu no-actual">Inicio</a></li>
						<li><a href="contacto.php" class="item-menu actual">Contacto</a></li>
						<li><a href="galeria.php" class="item-menu no-actual">Galería</a></li>
					</menu>
				</div>
			</div>
		</header>
		<h1>Contacto</h1>

		<script>
			function buscar()
			{
				fBuscar.submit();
			}
		</script>
	</body>
</html>