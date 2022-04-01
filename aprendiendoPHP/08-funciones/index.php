<?php
/**
 * FUNCIONES
 * Una funcion es un conjunto de instrucciones agrupadas bajo un nombre en concreto y pueden ser
 * reutilizadas solamente invocando la funcion tantas veces como queramos
 */
 
//Ejemplo 1
function imprimirNombres(){
    echo "Ivan <br>";
    echo "Daniel <br>";
    echo "Cesar <br>";
    echo "Arturo <br>";
}
imprimirNombres();
echo "<hr>";
//Ejemplo 2
function tabla($numero){
    echo "<h3>Tabla de multiplicar del numero $numero </h3>";
    for($entero=1;$entero<=10;$entero++){
        echo "$numero x $entero = ".($numero*$entero)."<br>";
    }
}
tabla(24);
echo "<hr>";
//Ejemplo 3
function calculadora($num1,$num2,$negrita=false){
    $calculadora_texto = "";
    if($negrita){
        $calculadora_texto .= "<b>";
    }
    $calculadora_texto .= "Suma: $num1 + $num2 = ".($num1+$num2)."<br>";
    $calculadora_texto .= "Resta: $num1 - $num2 = ".($num1-$num2)."<br>";
    $calculadora_texto .= "Multiplicacion: $num1 * $num2 = ".($num1*$num2)."<br>";
    $calculadora_texto .= "Division: $num1 / $num2 = ".($num1/$num2)."<br>";
    if($negrita){
        $calculadora_texto .= "</b>";
    }
    return $calculadora_texto;
}
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    echo calculadora($_GET['numero1'],$_GET['numero2'],true);
}
else{
    echo "Introduzca 2 valores en la URL porfavor";
}
echo "<hr>";
//Ejemplo 4
function mostrarNombre($nombre, $apellidos){
    return $texto = obtenerNombre($nombre)." <br>Y los apellidos son: $apellidos";
}
function obtenerNombre($nombre){
    return $texto = "El nombre es: $nombre";   
}

echo mostrarNombre("Ivan","Duran de la Torre");
