<?php
    include 'config/config.php';
	include 'library/autoload.php';

    $to = 'bibec56551@dotxan.com';
    $from = 'no-reply@test.es';

    $subject = $_POST['mensaje'];
    $message = $_POST['texto'];
    $realFrom = $_POST['emailTo'];
    $realName = 'No-reply';

    $email = new Email ($to, $subject, $message, $from, $realFrom, $realName);

    // var_dump($email);

    $email->send();

    header('Location: index.php');