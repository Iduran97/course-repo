<?php
/**
 * EJERCICIO 3 
 * Hacer una calculadora en php que tenga una interfaz de usuario(formulario) con 4 botones.
 * Botones para suma, resta, division y multiplicacion
*/
$resultado = false;
if(isset($_POST['num1']) && isset($_POST['num2'])){
    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['num1'] + $_POST['num2']);
    }elseif(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['num1'] - $_POST['num2']);
    }elseif(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['num1'] * $_POST['num2']);
    }elseif(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['num1'] / $_POST['num2']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora perrona</h1>
    <form action="" method="POST">
        <label for="num1">Numero 1</label>
        <input type="number" name="num1" />
        <label for="num2">Numero 2</label>
        <input type="number" name="num2" />
        <br><br>
        <input type="submit" value="sumar" name="sumar" />
        <input type="submit" value="restar" name="restar" />
        <input type="submit" value="multiplicar" name="multiplicar" />
        <input type="submit" value="dividir" name="dividir" />
    </form>
    <hr>
    <?php
        if($resultado != false):
            echo "<h2>$resultado</h2>";
        endif;
    ?>
</body>
</html>