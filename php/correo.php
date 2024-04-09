<?php
require_once("./main.php");

$email = $_POST['email'];
$name = $_POST['name'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$message = $_POST['message'];

// if(isset($_POST['politica-privacidad-check'])){
//     $politicas = $_POST['politica-privacidad-check'];
// }else{
//     echo 'Las politicas de privacidad son obligatorias';
//     exit();
// }

if($email != '' && $name != '' && $empresa != '' && $telefono != '' && $message != ''){
    $verificacion = new Translog();

    if($verificacion->verifyEmail($email)){
        $VEmail = true;
    }else{
        echo 'El email no es valido';
        exit();
    }
    if($verificacion->verifyNumber($telefono)){
        $VTelefono = true;
    }else{
        echo 'El numero telefonico no es valido';
        exit();
    }

    $name = $verificacion->cleanString($name);
    $email = $verificacion->cleanString($email);
    $empresa = $verificacion->cleanString($empresa);
    $telefono = $verificacion->cleanString($telefono);
    $message = $verificacion->cleanString($message);

}else{
    echo 'Debe rellenar todas las casillas';
    exit();
}



if($VTelefono && $VEmail){
    echo './gracias.php';

    exit();
}


?>