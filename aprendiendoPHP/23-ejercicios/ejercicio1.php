<?php
/**
 * EJERCICIO 1
 * Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion
 * de si el parametro GET COUNTER esta a 1 o a 0
*/

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero']= 0;
}
if(isset($_GET['counter'])){
    if($_GET['counter'] == 1){
        $_SESSION['numero'] ++;
    }else if($_GET['counter'] == 0){
        $_SESSION['numero'] --;
    }
}
?>

<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>