<?php
/**
 * EJERCICIO 2
 * 1. Tener una funcion
 * 2. Validar un email con filtervar()
 * 3. Recoger una varieble por get y validarla
 * 4. Mostrar el resultado
*/

function validarEmail($email){
    $status = "No valido";
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "Pasa por get un email...";
}