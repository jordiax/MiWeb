<?php 
	require 'templates/template.php'; 
	include 'config/config.php';
	include 'library/autoload.php';
    session_start();

    if(!empty($_POST['uploadF']))
        Session::set('galeria', 'f1');
    else
        Session::set('galeria', 'rally');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="MF0491: prueba práctica de la parte cliente.">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="https://fastlight.org/css/base.css">
		<script src="js/preview.js"></script>
		<title>Formulario de subida de imágenes</title>
	</head>
	<body>
		<?php 
		//<HEADER>
			cabecera('Mundo Scalextric', 'Página sobre Scalextric', 'ini'); 
		//</HEADER>
        echo Session::get('galeria');
		?>
        <div class="flex-container">
            <form class="flex4" method="post" enctype="multipart/form-data" action="scripts/upload.php">
                <label for="fichero">Imagen:</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000"> 
                <input type="file" accept="image/*" name="fichero1" id="file-with-preview" required>
                <div class="p1 centered">
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Reset">
                </div>
            </form>
            <figure class="flex1">
                <img src="img/default.png" id="preview-image" alt="preview">
            </figure>
        </div>   
    </body>    
	<?php
	//<FOOTER>
		piePagina("Alex Jordi");
	//</FOOTER>
	?>
</html>

        
        