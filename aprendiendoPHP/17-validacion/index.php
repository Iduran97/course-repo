<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>
    <br>
    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == "Faltan datos"){
                echo "<strong style='color:red'>".$error."</strong>";
            }else{
                
            }
        } 
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" pattern="[A-Za-z]+">
        <br>
        <br>
        <label for="apellidos">Apellidos</label>
        <br>
        <input type="text" name="apellidos" pattern="[A-Za-z]+">
        <br>
        <br>
        <label for="edad">Edad</label>
        <br>
        <input type="text" name="edad" pattern="[0-9]+">
        <br>
        <br>
        <label for="correo">Correo</label>
        <br>
        <input type="email" name="correo">
        <br>
        <br>
        <label for="contraseña">Contraseña</label>
        <br>
        <input type="password" name="contraseña">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>