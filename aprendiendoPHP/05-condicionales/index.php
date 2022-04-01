<?php
//Condicionales
$color = "rojo";
if ($color == "rojo") {
    echo 'EL COLOR ES ROJO';
}
else
{
    echo 'EL COLOR NO ES ROJO';
}
echo '<br>';

$year = 2019;
if($year <= 2019){
    echo 'Es un año anterior a 2019';
}
else{
    echo 'Es un año posterior a 2019';
}
//Ejemplo 3
$nombre = 'David';
$edad = 42;
$mayoriaEdad = 18;
if($edad >= $mayoriaEdad){
    echo "<H1> $nombre es mayor de edad</H!>";
    echo "<H2>Su edad sumada serian ".($edad + $mayoriaEdad)." años";
}
echo "<br>";
//Switch
$dia = 4;

switch ($dia) {
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "FIN DE SEMANA";
        break;
}
//Goto
goto marcacion;

echo "Cualquier cosa";
echo "Cualquier cosa";
echo "Cualquier cosa";
echo "Cualquier cosa";

marcacion:
echo "El programa se ha saltado 4 echos";