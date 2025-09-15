<?php
function cabecera(string $titulo='', string $subtitulo = '')
{
    ?>
    <header>
        <h1><?= $titulo ?></h1>
        <h2><?= $subtitulo ?></h2>
    </header>
    <?php
}

function menu(string $actual = 'ini')
{
    ?>
    <menu class="menu">
        <li><a href="index.php" <?= $actual == 'ini' ? 'class="item-menu actual"' : 'class="item-menu no-actual"'?>>Inicio</a></li>
		<li><a href="contacto.php" <?= $actual == 'con' ? 'class="item-menu actual"' : 'class="item-menu no-actual"'?>>Contacto</a></li>
        <li><a href="galeria.php" <?= $actual == 'gal' ? 'class="item-menu actual"' : 'class="item-menu no-actual"'?>>Galería</a></li>
    </menu>
    <?php
}
?>