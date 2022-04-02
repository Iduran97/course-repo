<?php
/**
 * SESION: Almacenar y persisitir datos del usuario mientas navega en el sitio web hasta que cierra 
 * sesion o cierra en el navegador
*/

// Para iniciar la sesion es necesario utilizar la funcion session_start 
session_start();
//Variable local
$variable_normal = "Soy un string";
//Variable de sesion
$_SESSION['variable_persistente']="Soy una variable de sesion";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];