<?php 
	require 'templates/template.php'; 
	include 'config/config.php';
	include 'library/autoload.php';
?>
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
		<?php 
		//<HEADER>
			cabecera('Mundo Scalextric', 'Página sobre Scalextric', 'ini'); 
		//</HEADER>
		?>
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
		<br>
		<p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consectetur consectetur purus, aliquam viverra augue blandit non. Mauris aliquam faucibus tellus, vitae euismod mi vehicula a. Cras in placerat tortor, sed convallis nisi. Donec gravida nisl facilisis nunc aliquet pharetra. Donec vitae augue sit amet diam cursus semper sit amet malesuada justo. Suspendisse pulvinar maximus quam vel pharetra. Ut condimentum nisl ac dui auctor commodo. Aliquam sollicitudin mi ac congue tincidunt.</p>
		<br>
		<figure class="figura-parrafo">
			<img src="img/galeria/rally/lancia-stratos.png" alt="Lancia Stratos SRC" class="imagen-parrafo">
		</figure>
		<br>
		<div class="flex-container">
			<div class="flex2 parrafo">
				<p>Maecenas fringilla ornare libero a luctus. Integer ultricies venenatis magna sit amet pharetra. Morbi sit amet ante eu odio molestie mattis. Duis elementum eros eget massa iaculis, non finibus erat iaculis. Quisque ante ante, hendrerit a tellus in, vulputate cursus tortor. Nam convallis lorem pretium aliquet vulputate. Curabitur sit amet leo quis augue sollicitudin commodo non nec orci.</p>
			</div>
			<div class="flex2 parrafo">
				<p>Donec id vestibulum justo. Phasellus vel rutrum velit. Phasellus in interdum est, varius congue ante. Nullam ullamcorper rutrum leo, ac vehicula felis pulvinar sit amet. Donec et elit luctus, pellentesque enim id, congue dolor. Nulla luctus ligula neque, non posuere dui imperdiet nec. Donec pellentesque purus a libero ornare pretium. Fusce et luctus augue, in malesuada neque. Etiam sit amet est non purus fringilla iaculis. Quisque rutrum nisi quam, et venenatis elit fringilla et. Cras eget neque nec diam interdum finibus. </p>
			</div>
		</div>
		<div class="flex-container">
			<div class="flex2 parrafo">
				<p>Curabitur dictum gravida luctus. Curabitur rutrum magna vel rutrum rutrum. Proin sodales dolor quis lacus lacinia tincidunt ut eu dui. Phasellus id lorem quam. Nunc viverra vel orci id sollicitudin. Nunc ut tristique justo. Nam quam quam, tincidunt sed elit ut, viverra ullamcorper elit. Nunc ultrices odio nec nulla efficitur condimentum. Integer sed magna in tortor luctus imperdiet ut non erat. </p>
			</div>
			<div class="flex2 parrafo">
				<p>Etiam congue tristique nibh, a condimentum tortor ultrices vitae. Nam quis nunc magna. In nec mauris eget arcu euismod posuere. Nulla est ipsum, eleifend egestas dui vel, eleifend accumsan nisl. Nunc non nulla odio. Nunc blandit et nisl eget efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed dapibus ipsum sed felis ullamcorper pellentesque. Vestibulum id odio quis urna rhoncus ultrices.</p>
			</div>
		</div>
		<br>
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