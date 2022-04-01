<?php
/**
 * EJERCICIO 5
 * Mostrar todos los numero entre 2 numeros impares que se recojan mediante get
 */
if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    if($num2<$num1){
        echo "El numero 2 debe ser mayor al numero 1";
    }
    else{
        for($num1;$num1<=$num2;$num1++){
            if($num1%2 != 0){
                echo $num1."<br>";
            }
        }
    }
}
else{
    echo "Introdzca los parametros necesarios en la URL";
}

