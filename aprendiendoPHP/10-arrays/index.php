<?php
/**
 * Un array es una coleccion o un conjunto de datos/valores bajo un unico nombre
 * y para acceder a esos valores podemos usar un indice numerico o alfanumerico
 */
$heroes = array("All Might","Kirishima","Deku");
echo var_dump($heroes[2]);

$villanos = ["Shigaraki","Spinner"];
$personas = array(
    "nombre" => "Touka",
    "apellido" => "Yatogami",
    "quirck" => "Llama Ardiente"
);

echo var_dump($personas);

echo $heroes[0]."<br>";
echo $villanos[1]."<br>";

for($i=0;$i < count($heroes);$i++){
    echo $heroes[$i]." ";
}

echo "<br>";

foreach ($villanos as $villano) {
    echo $villano." ";
}

echo "<hr>";

//Arrays multidimensionales
$waifus = array(
    array(
        "nombre" => "Maki",
        "apellido" => "Oze"
    ),
    array(
        "nombre" => "Mehgumin",
        "apellido" => "Explosion"
    ),
    array(
        "nombre" => "Aqua",
        "apellido" => "Perrona"
    ),
);

echo var_dump($waifus);
echo "<br>";
echo $waifus[2]["nombre"];
echo "<br>";

foreach($waifus as $waifu){
    echo $waifu["nombre"]."<br>";
}