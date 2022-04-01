<?php
/**
 * EJERCICIO 2
 * Mostrar en pantalla todos los numero pares que hay del 1 al 100
 */
$contador = 0;
while($contador <= 100){
    //echo ($contador += 2)."<br>";
    if($contador%2==0){
        echo $contador."<br>";
    }
    $contador++;
}