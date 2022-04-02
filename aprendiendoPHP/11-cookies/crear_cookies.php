<?php
/**
 * COOKIE: Fichero que se almacena en el orrdenador del usuario que visita la web con el fin de recordar
 * datos o almacenar cierta informacion y comportamiento de la web 
*/

//Crear cookie
//setcookie("nombre","valor que solo puede ser texto",caducida,ruta,dominio);
setcookie("miCookie","cookie basica");
//Cookie caduca
setcookie("cookieCaduca","Esta cookie caducara en un año", time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>
