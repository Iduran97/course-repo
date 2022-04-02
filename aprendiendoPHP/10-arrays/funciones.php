<?php
/**
 * Funciones de los arrays
 */

 $bandas = array("Slipknot","Metallica","Assholes","Linkin","Iron Maiden");

 sort($bandas);
 var_dump($bandas);

//Agrefar elementos array
 array_push($bandas,"Warhammer");

 //Eliminar elementos array
 array_pop($bandas);
 unset($bandas[2]);

 var_dump($bandas);
 
 //Aleatorio
 $random = array_rand($bandas);
 echo $bandas[$random];

 //Dar la vuelta
 var_dump(array_reverse($bandas));
 
 //Buscar dentro de un array 
 $busqueda = array_search("Metallica",$bandas);
 var_dump($busqueda);