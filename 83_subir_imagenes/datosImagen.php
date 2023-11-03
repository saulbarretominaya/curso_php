<?php

//Recibimos los datos de la imagen 


$nombre_origen = $_FILES["imagen"]["name"];
$tipo_imagen = $_FILES["imagen"]["type"];
$tamaño_imagen = $_FILES["imagen"]["size"];

//Primero validamos el tamaño del archivo
if ($tamaño_imagen <= 1000000) { //1000000 es un millon de byte = a un mega. 

    //luego validamos el tipo de archivo, en este caso solo se aceptaran imagenes, es importante hacer un echo
    if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/git") {
        //Carpeta Destino
        $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/CursoPHP/83_subir_imagenes/uploads/";
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta_destino . $nombre_origen);
        echo "La Carpeta fue subida a la Sgte Ruta: " . $carpeta_destino;
    } else {
        echo "El Formato no es compatible";
    }
} else {
    echo "El tamaño es demasiado grande";
}


require_once("conexion.php");

$conexion = mysqli_connect($hostname, $username, $password, $database);
$query = "update productos set foto='$nombre_origen' where id_producto='1' ";
$resultado = mysqli_query($conexion, $query);
