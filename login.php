<?php 
	session_start();
	include 'templates/template.php'; 
	//include 'scripts/sendLogin.php';
	include 'library/Session.php'
?>
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
		<?php 
		//<HEADER>
			cabecera('Mundo Scalextric', 'Página sobre Scalextric', 'ini'); 
		//</HEADER>
		?>
        <form method="post" action="scripts/sendLogin.php">
			<div>
				<label for="usuario">Usuario:</label>
				<input type="text" id="usuario" name="usuario" required>
				<br>
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required>
			</div>		
			<div class="botones">
				<input type="submit" value="Aceptar" class="lboton" id="aceptar" name="login"/>
				<input type="reset" value="Cancelar" class="lboton" id="cancelar"/>
			</div>
		</form>       
    </body>
</html>