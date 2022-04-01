<?php
/**
 * EJERCICIO 4 
 *Recoger 2 numeros por la URL y hacer operaciones basicas de una calculadora
 */
if(isset($_GET['num1']) && isset($_GET['num2'])){
    echo "<h1>Calculadora</h1>";
    echo "Suma: ".($_GET['num1'] + $_GET['num2'])."<br>";
    echo "Resta: ".($_GET['num1'] - $_GET['num2'])."<br>";
    echo "Multiplicacion: ".($_GET['num1'] * $_GET['num2'])."<br>";
    echo "Division: ".($_GET['num1'] / $_GET['num2'])."<br>";
    echo "Resto: ".($_GET['num1'] % $_GET['num2'])."<br>";
}
else{
    echo "No se pueden realizar las opercaiones porque faltan parametros";
}