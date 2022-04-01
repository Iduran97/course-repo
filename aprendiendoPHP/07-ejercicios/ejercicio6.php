<?php
/**
 * EJERCICIO 6 
 * Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
 */
echo "<table border='1'> <tr>";
echo "<tr>";
for($cabecera=1;$cabecera<=10;$cabecera++){
    echo "<td>Tabla del $cabecera </td>";
}
echo "</tr>";
for($multiplo=1;$multiplo<=10;$multiplo++){
    echo "<tr>";
    for($tabla=1;$tabla<=10;$tabla++){
        echo "<td> $tabla x $multiplo = ".($tabla*$multiplo)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
