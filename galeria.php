<?php require 'templates/template.php'; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MF0491: prueba práctica de la parte cliente.">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="js/galeria.js"></script>
		<title>Página principal</title>
	</head>
	<body>
		<?php 
		//<HEADER>
			cabecera('Mundo Scalextric', 'Página sobre Scalextric', 'gal'); 
		//</HEADER>
		?>
		<h1>Galería</h1>
		<a href="./imagenes.php">A imágenes</a>
		<br>
		<a href="./videos.php">A vídeos</a>
		<br>
		<a href="./audios.php">A audios</a>
		<script>
			function buscar()
			{
				fBuscar.submit();
			}
		</script>
	</body>
</html>