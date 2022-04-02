<?php
//Abrir archivo
$abrir_archivo = fopen('fichero_textio.txt','a+');
//Leer contenido 
function mostrarContenido (){
    //Abrir archivo
    $abrir_archivo = fopen('fichero_textio.txt','r');
    $contenido = "";
    while(!feof($abrir_archivo)){
    $contenido .= fgets($abrir_archivo)."<br>";
    }
    return $contenido;
}
echo mostrarContenido();
//Escribir a+en archivo 
fwrite($abrir_archivo,"Esta es un texto metido desde php");
echo mostrarContenido();
//Cerrar archivo 
fclose($abrir_archivo);
//Copia un archivo 
copy('fichero_textio.txt','fichero_copiado.txt') or die("Error al copiar");
rename('fichero_textio.txt','fichero_original.txt');
unlink('fichero_original.txt');
//Buscar un archivo
if(file_exists('fichero_textio.txt')){
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}