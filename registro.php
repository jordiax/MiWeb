<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MF0491: prueba práctica de la parte cliente.">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="js/registro.js"></script>
		<title>Página de registro</title>
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
					<a href="#">Registro</a>
					<figure><img src="img/registro.png"></figure>
				</div>
			</div>
			<div class="flex-container">
				<div class="navegacion migas flex2">
					<a href="./index.php" class="migas">Inicio</a><span> / Registro</span>
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
						<li><a href="contacto.php" class="item-menu no-actual">Contacto</a></li>
						<li><a href="galeria.php" class="item-menu no-actual">Galería</a></li>
					</menu>
				</div>
			</div>
		</header>
        <form class="dRegistro">
            <label class="lRegistro">Nombre:</label>
            <input type="text" name="nombre" class="mayusculas">
            <br>
            <label class="lRegistro">Apellidos:</label>
            <input type="text" name="apellidos" class="mayusculas">
            <br>
            <label class="lRegistro">Correo:</label>
            <input type="email" name="correo">
            <br>
            <label class="lRegistro">Contraseña:</label>
            <input type="password" name="password">
            <br>
            <label class="lRegistro">Repita la contraseña:</label>
            <br>
            <input type="password" name="repite-pasword" id="repass">
            <br>
            <input type="submit" value="Aceptar" class="boton" id="aceptar"/>
            <input type="reset" value="Cancelar" class="boton" id="cancelar"/>
		</form>
    </body>
</html>