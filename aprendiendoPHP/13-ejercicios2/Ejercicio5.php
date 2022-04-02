<?php
/**
 * EJERCICIO 5
 * Crear un array con el contenido de la siguiente tabla:
 * ACCION   AVENTURE  DEPORTES
 * GTA      CRASH     FIFA
 * COD      ASSASINS  PES
 * PUBG     PRINCE    FORZA
 * Cada columna debe ir en un fichero separado
*/

$tabla = array(
    "ACCION" => array("GTA","COD","PUBG"),
    "AVENTURA" => array("CRASH","ASSASINS","PRICE"),
    "DEPORTES" => array("FIFA","PES","FORZA")
);

$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require_once "Includes5/encabezado.php"?>
    <?php require_once "Includes5/primera.php"?>
    <?php require_once "Includes5/segunda.php"?>
    <?php require_once "Includes5/tercera.php"?>
</table>