<?php
/**
 * EJERCICIO 1
 * Hacer u n programa en php que tenga un array con 8 numeros enteros y que haga lo siguiente:
 * 1. Recorresr el arreglo y mostrarlo
 * 2. Ordenarlo y mostrarlo
 * 3. Mosrtar su longitud 
 * 4. Buscar algun elemento
*/

function BuildArray($array){
    $string = "";
    foreach($array as $item){
    $string .= $item."<br>";
    return $string;
    }
} 
//1
$campeones = array("Renata","Lux","Yasuo","Volibear","Shaco","Samira");
echo BuildArray($campeones);
echo "<hr>";
//2
sort($campeones);
echo BuildArray($campeones);
//3
echo "<hr>";
echo "The lenght of the array is: ".sizeof($campeones);
echo "<hr>";
//4
if(isset($_GET['search'])){
    $search = $_GET['search'];
    if(str_contains($search,"/")){
        $searchValue = substr($search,strpos($search,"/")+1);
        if($searchValue != null){
            if(str_contains($search,"value")){
                if(array_search($searchValue,$campeones) == null){
                    echo "The value searched for was not found on the array";
                }
                else{
                    echo "The index of the value ".$searchValue." is: ".array_search($searchValue,$campeones);
                }
            }
            else if(str_contains($search,"index")){
                if(is_numeric($searchValue)){
                    if($searchValue > sizeof($campeones)){
                        echo "The index is greater than the number of values on the array";
                    }
                    else{
                        echo "The value of the index ".$searchValue." is: ".$campeones[$searchValue];
                    }
                }
                else{
                    echo "The index is not a number";
                }
            }
        }
        else{
            echo "There is no value or index to search for";
        }
    }
    else{
        echo "The string don't have the right structure";
    }
}
else{
    echo "Please input the parameter 'Search' with the following structure: 
    (value/index),(value to search for)";
}