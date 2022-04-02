<?php
//Crear una carpeta
$flag = true;
if(is_dir("Mi carpeta")){
    $flag = false;
    $files = glob('Mi carpeta/*'); // get all file names
    foreach($files as $file){ // iterate files
        if(is_file($file)) {
            unlink($file); // delete file
        }
    }
    rmdir("Mi carpeta") or die("Nose pudo eliminar la carpeta");
}else{
    mkdir("Mi carpeta",0777) or die("No se puede crear la carpeta");
    $nuevo_archivo = fopen("Mi carpeta/pagina1.txt","w");
    fwrite($nuevo_archivo,"Este es un archivo creado");
}
//Leer el contenido de la carpeta
if($flag != false){
    echo "<h1> Contenido de la carpeta </h1>";
    if ($gestor = opendir("./Mi carpeta")){
        while(($archivo = readdir($gestor)) !== false){
            if($archivo != "." && $archivo != ".."){
                echo $archivo."<br>";
            }
        }
    }
}else{
    echo "<h1> No existe 'Mi Carpeta'</h1>";
}
