<?php
/**
 * EJERCICIO 2 
 * Hacer un programa que añada valores a un array mientras que su longitud sea menor a 120
 * y despues mostrar su infromacion en pantalla 
*/

$randomArray = array();

while(sizeof($randomArray)<120){
    array_push($randomArray,random_int(0,1000));
}

var_dump($randomArray);