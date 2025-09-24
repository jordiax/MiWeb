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
		<link rel="stylesheet" type="text/css" href="css/galeria.css">
		<script src="js/galeria.js"></script>
		<title>Página principal</title>
	</head>
	<body>
		<?php 
		//<HEADER>
			cabecera('Mundo Scalextric', 'Página sobre Scalextric', 'gal'); 
		//</HEADER>
		?>
		<h1>Galería de imágenes</h1>
		<br>
		<h2>Coches de F1</h2>
		<div id="galeria">
			<div class="flex-container galeria">
			<?php
				$directorio = 'img/galeria/f1';
				$filtro = '/\.(jpe?g|png)$/i';
				$archivos = scandir($directorio);

				$filtrados=[];
				foreach($archivos as $archivo)
					if(preg_match($filtro, $archivo))
						$filtrados[]=$archivo;
				sort($filtrados);

				foreach($filtrados as $fichero)
				{?>
				<figure class="flex4 marco">
					<img class="cuadrar-imagen" src = '<?="$directorio/$fichero"?>'>
					<figcaption><?= strtoupper(str_replace('-', ' ', substr($fichero, 0, -4))); ?></figcaption>
				</figure>
			<?php
				}
			?>
			 <?php
                if(Session::has('user'))
                {
            ?>
			</div>
			<br>
			<form class="flex4" method="post" action="formularioGaleria.php">
				<input type="submit" value="Subir imágenes" name="uploadF" class="item-menu no-actual">
			</form>
			<br>
			<?php } ?>			
			<br>
			<h2>Coches de Rally</h2>
			<div class="flex-container galeria">				
				<?php
				$directorio = 'img/galeria/rally';
				$filtro = '/\.jpe?g$/i';
				$archivos = scandir($directorio);

				$filtrados=[];
				foreach($archivos as $archivo)
					if(preg_match($filtro, $archivo))
						$filtrados[]=$archivo;
				sort($filtrados);

				foreach($filtrados as $fichero)
				{?>
				<figure class="flex4 marco">
					<img class="cuadrar-imagen" src = '<?="$directorio/$fichero"?>'>
					<figcaption><?= strtoupper(str_replace('-', ' ', substr($fichero, 0, -4))); ?></figcaption>
				</figure>
			<?php
				}
			?>
			</div>
			<br>
			<form class="flex4" method="post" action="formularioGaleria.php">
				<input type="submit" value="Subir imágenes" name="uploadR" class="item-menu no-actual">
			</form>
			<br>
		</div>
		<script>
			function buscar()
			{
				fBuscar.submit();
			}
		</script>
	</body>
	
	<?php
	//<FOOTER>
		piePagina("Alex Jordi");
	//</FOOTER>
	?>
</html>