<?php
//BUCLE WHILE
//Itera sobre una serie de instrucciones en base a una condicion
//Ejemplo 1
$numero = 0;
while ($numero <= 100) {
    if($numero != 100){
        echo $numero.", ";
    }
    else{
        echo $numero;
    }
    $numero++;
}
//Ejemplo 2
echo "<hr>";
if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}
else{
    $numero = 1;
}
$contador = 1;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador++;
}
echo "<hr>";
//BUCLE DO WHILE
$edad = 28;
$contador = 1;
do{
    echo "Tienes acceso al puticlub por que tienes $contador años <br>";
    $contador++;
}while($edad >= 18 && $contador <= 5);
echo "<hr>";
//BUCLE FOR
$resultado = 0;
for($i = 0;$i <= 100;$i++){
    $resultado += $i;
}
echo "El resultado es: $resultado";