<?php
	include '../library/User.php';
    include '../library/Session.php';
    session_start();
    
    if(!empty($_POST['login']))
    {
        $userName = $_POST['usuario'];
        $password = $_POST['password'];

        $nuevoUsuario = new User($userName, $password, ['ROLE_USER']);
        Session::set('user', $nuevoUsuario);

        echo 'Usuario '.Session::get('user')->userName.' validado';
    }

    if(isset($_GET['logout']))
        Session::destroy();

    // sleep (5);
    header('Location: ../index.php');
    