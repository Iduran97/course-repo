<?php
$stringFinal = "";
if(isset($_POST['nombre'])){
    $stringFinal .= "El nombre del tipo en cuestion es: ".$_POST['nombre'];
}
if(isset($_POST['apellido'])){
    $stringFinal .= " ".$_POST['apellido'];
}
echo $stringFinal;