<?php
echo '<h1>Operdaores aritmeticos</h1>';
$num1 = 10;
$num2 = 46;

echo 'Suma: '.($num1 + $num2).'<br>';
echo 'Resta: '.($num1 - $num2).'<br>';
echo 'Multiplicacion: '.($num1 * $num2).'<br>';
echo 'Division: '.($num1 / $num2).'<br>';
echo 'Resto: '.($num1 % $num2).'<br>';

echo '<h1>Operadors incremento y decremento</h1>';
$year = 2022;
//Incremento
$year = $year++;
//Decremento
$year = $year--;
echo $year;

echo '<h1>Operadores de asignacion</h1>';
$edad = 24;
echo $edad.'<br>';
// $edad = $edad + 5;
echo ($edad+=5);
