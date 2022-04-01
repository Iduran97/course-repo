<?php
$archivo = $_FILES['Archivo'];
$nombre = $archivo['name'];
$type = $archivo['type'];
if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
    if(!is_dir("Images")){
        mkdir("Images",0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    echo "<h1>Imagen subida correctamente</h1>";
    header("Refresh: 2; URL=index.php");
}else{
    header("Refresh: 2; URL=index.php");
    echo "<h1>Sube una imagen con un formato correto puñetas</h1>";
}
die();