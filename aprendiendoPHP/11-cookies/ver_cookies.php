<?php
/**
 * Para mostrar las cookies, tengo que usar $_COOKIE, una variable superglobal, que es un 
 * array asociativo
*/

if(isset($_COOKIE['miCookie'])){
    echo "<h1>".$_COOKIE['miCookie']."</h1>";
}else{
    echo "No existe la cookie"."<br>";
}

if(isset($_COOKIE['cookieCaduca'])){
    echo "<h1>".$_COOKIE['cookieCaduca']."</h1>";
}else{
    echo "No existe la cookie"."<br>";
}
echo "<hr>";
?>
<a href="crear_cookies.php">Crear las cookies</a>
<hr>
<a href="eliminar_cookies.php">Eliminar las cookies</a>