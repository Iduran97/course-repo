<?php
$error = "Faltan datos";
if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && 
!empty($_POST['correo']) && !empty($_POST['contraseña'])){
    $error = "ok";
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $mail = $_POST['correo'];
    $pass = $_POST['contraseña'];
}else{
    header("Location:index.php?error=".$error);
}