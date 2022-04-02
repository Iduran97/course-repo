<?php
/**
 * EJERCICIO 3
 * Checar si una variable esta vacioa, y si si sta rellenarle con texto en minusculas
 * pero mostrarla en mayusculas y en negrita
*/

function generateWord(){
    $letterArrays = array_merge(range("a","z"),range("A","Z"));
    shuffle($letterArrays);
    return substr(implode($letterArrays),0,8);
}

if(isset($_GET['variable'])){
    $variable = $_GET['variable'];
    if(empty($variable)){
        echo "<strong>".strtoupper(generateWord())."</strong>";
    }else{
        echo "Your variable is: ".$variable;
    }
}else{
    echo "Please insput a variable on the URL as parameter:)";
}