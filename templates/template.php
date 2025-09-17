<?php
function cabecera(string $titulo='', string $subtitulo = '', $pagina)
{
    ?>
    <header id="cabecera">
        <div class="flex-container">
            <div class='flex2 cabecera'>
                <figure><img src="img/logo-transparent.png" alt="logo" id="logo"></figure>
            </div>
            <div class='flex2 cabecera'>
                <h1 class="titulo-head"><?= $titulo ?></h1>
                <h2 class="subtitulo-head"><?= $subtitulo ?></h2>
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
                <?php
                    switch($pagina)
                    {
                        case 'con': migas(['Inicio'=>'index.php', 'Contacto'=>'contacto.php']);
                            break;
                        case 'gal': migas(['Inicio'=>'index.php', 'Galería'=>'galeria.php']);
                            break;
                        default: migas(['Inicio'=>'index.php']);
                            break;
                    }
                ?>
            </div>
            <div class="navegacion flex2" id="dBuscar">
                <form action="/search" id="fBuscar">
                    <!-- <label for="iBuscar">Buscar:</label> -->
                    <input type="search" id="iBuscar" name="b" placeholder="Ingrese su búsqueda">
                    <img src="img/lupa.png" alt="Buscar" class="buscar" onclick="buscar()">
                </form>
            </div>
            <div class="navegacion menu flex2">
                <?php menu($pagina); ?>
            </div>
        </div>
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

function migas (?array $entradas = NULL)
{
    if($entradas)
    {
        foreach($entradas as $pagina=>$enlace)
            echo "\t\t\t<a href='$enlace'>$pagina</a>";
    }
}

function piePagina(string $autor)
{
    ?>
    <footer class="pie-pagina">
        <p>Autor: <?=$autor?></p>
        <p>Página creada como parte de formación en programación PHP.</p>
    </footer>
    <?php
}
?>