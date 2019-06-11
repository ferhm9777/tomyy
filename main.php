<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

    //verifica campos vacios
    if(empty($nombre) or empty($email) or empty($telefono) or empty($mensaje)){
        echo "Algunos campos obligados estan vacios.";
    }
    else{
        $header = 'From: ' .$email . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        $info = "Este mensaje fue enviado por: " . $nombre . "\r\n";
        $info .="Correo: " . $email . "\r\n";
        $info .="telefono: " . $telefono . "\r\n";
        $info .="Mensaje: " . $mensaje . "\r\n";
        $info .="Enviado: " . date('d/m/Y', time());

        $para = 'becerra18alee@gmail.com';
        $asunto = 'mensaje de formulario';

        mail($para, utf8_decode($asunto), utf8_decode($info), $header);

        echo "Su mensaje fue enviado exitosamente, gracias!";
    }

    ?>