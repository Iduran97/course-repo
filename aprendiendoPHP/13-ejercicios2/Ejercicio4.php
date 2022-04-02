<?php
/**
 * EJERCICIO 4
 * Crear un script en php que tenga 4 variables, una de tipo array, otra de tipo string, otra int y otra
 * booleana y que imprima un mensaje dependiendo del valor que sea 
*/

$arreglo = array();
$cadena = "Esta es una cadena";
$numero = 34;
$booleano = true;

function checkType($variable){
    $message = "";
    if(is_string($variable)){
        $message = "The variable is a string";
    }elseif(is_numeric($variable)){
        $message = "The variable is a number";
    }elseif(is_array($variable)){
        $message = "The variable is an array";
    }elseif(is_bool($variable)){
        $message = "The variable is a bool";
    }
    return $message;
}

echo checkType($booleano);