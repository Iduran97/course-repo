<?php
    $variable = 'Hola mundo desde una variable';
    $booleano = true;
    $numero = 10;
    echo $variable;
    echo '<h1>'.$variable.'</h1>'.'<br>'.$booleano.'<br>';
    echo $numero;
    echo '<br>'.gettype($numero);

    //Debuggear
    $mi_nombre = "Ivan Duran";

    var_dump($mi_nombre);

    echo 'Soy el numero';

    // Constantes 
    define('nombre','ivan duran');
    echo '<h1>'.nombre.'</h1>';

    //Constantes predefinida
    echo __FILE__;
?>