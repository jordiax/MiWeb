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
		<script src="js/index.js"></script>
		<title>Contacto</title>
	</head>
	<body>
		<?php 
		//<HEADER>
			cabecera('Mundo Scalextric', 'Página sobre Scalextric', 'con'); 
		//</HEADER>
		?>
		<h1>Contacto</h1>
		<div class="flex-container">
            <form class="flex4" method="post" action="enviar.php">
                <label for="emailTo">Email:</label>
                <input type="input"  name="emailTo" required>
				<br>
				<label for="mensaje">Descripción</label>
				<input type="input"  name="mensaje" required>
				<br>
				<label for="texto" class="texto">Texto:</label>
				<textarea rows = "5" cols = "60" name = "texto" placeholder="Escribe tu mensaje."></textarea>
                <div>
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Reset">
                </div>
            </form>
        </div>
		<script>
			function buscar()
			{
				fBuscar.submit();
			}
		</script>
	</body>
</html>