<?php 
	require 'templates/template.php'; 
	include 'config/config.php';
	include 'library/autoload.php';
	session_start();
?>
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
        <?php 
		//<HEADER>
			cabecera('Mundo Scalextric', 'Página sobre Scalextric', 'ini'); 
		//</HEADER>
		?>
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