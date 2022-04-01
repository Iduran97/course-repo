<?php

$frase = "Treachery upon your heart";

function imprimir(){
    global $frase;
    return "<h1>$frase</h1>";
}

echo imprimir();

function buenosDias(){
    return "Buneos dias pendejo";
}

function buenasTardes(){
    return "Que tal la comida?";
}

function buenasNoches(){
    return "Descansa pendjo";
}

$horario = "Tardes";
$miFuncion = "buenas".$horario;
echo $miFuncion();