<?php
    include "../exceptions\UploadException.php";
    include "../library\Upload.php";
    include "../library/Session.php";
    session_start();

    try
    {
        // echo var_dump($_SESSION);
        if(Session::get('galeria') == 'f1')
            $ruta = Upload::save('fichero1', '../img/galeria/f1', true, 1240000, 'image/*', 'img_', true);
        else
            $ruta = Upload::save('fichero1', '../img/galeria/rally', true, 1240000, 'image/*', 'img_', true);

        $log = date("Y-m-d H:i:s")." - Éxito en la operación, fichero subido a $ruta";

        echo $log;

        $fichero = fopen("../log/log.txt", 'a');

		fwrite($fichero, $log.PHP_EOL);
		fclose($fichero);
    }
    catch (UploadException $e)
    {
        $log = date("Y-m-d H:i:s")." - Error: ".$e->getMessage().PHP_EOL;

        echo $log;

        $fichero = fopen("../log/log.txt", 'a');

		fwrite($fichero, $log.'\r\n');
		fclose($fichero);
    }
    finally
    {
        header("Refresh:1;url='../formularioGaleria.php'");
    }