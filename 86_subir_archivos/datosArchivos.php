<?php

//Recibimos los datos de la imagen 

$nombre_archivo = $_FILES["archivo"]["name"];
$tipo_archivo = $_FILES["archivo"]["type"];
$tamaño_archivo = $_FILES["archivo"]["size"];

//Primero validamos el tamaño del archivo
if ($tamaño_archivo <= 1000000) { //1000000 es un millon de byte = a un mega. 

    //Carpeta Destino
    $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/CursoPHP/86_subir_archivos/uploads/";
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino . $nombre_archivo);
    echo "La Carpeta fue subida a la Sgte Ruta: " . $carpeta_destino;
} else {
    echo "El tamaño es demasiado grande";
}


require_once("conexion.php");

$conexion = mysqli_connect($hostname, $username, $password, $database);

//Ahora a convertir el archivo a byte
$archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, 'r'); // con este archivo apuntamos al archivo que queremos abrir
$contenido = fread($archivo_objetivo, $tamaño_archivo);
$contenido = addslashes($contenido);

fclose($archivo_objetivo);

$query = " insert into archivos (id, nombre, tipo, contenido) values (0,'$nombre_archivo','$tipo_archivo','$contenido')";
$resultado = mysqli_query($conexion, $query);

if (mysqli_affected_rows($conexion) > 0) {
    echo "Se ha insertado el registro con exito";
} else {
    echo "No se ha podido insertar el registro";
}
