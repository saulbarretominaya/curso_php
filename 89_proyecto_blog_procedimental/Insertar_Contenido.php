<?php


$miconexion = mysqli_connect("localhost", "root", "", "pruebas");


if (!$miconexion) {

    echo "Error en la conexion" . mysqli_connect_error();
    exit();
}


if ($_FILES["imagen"]["error"]) { //https://www.php.net/manual/en/features.file-upload.errors.php

    switch ($_FILES["imagen"]["error"]) {
        case 1: //El archivo cargado excede la directiva upload_max_filesize en php.ini .
            echo "El tamaño del archivo excede lo permitido por el servidor";
            break;
        case 2: //El archivo cargado excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.
            echo "El tamaño del archivo excede 2 Megas";
            break;
        case 3: //El archivo cargado se cargó solo parcialmente, ejem: si se va el internet.
            echo "El envio de archivo de interrumpio";
            break;
        case 4: //Ningun archivo fue subido.
            echo "No se ha enviado ningun archivo";
            break;
    }
} else {

    echo "No hay error en la transferencia del archivo. </br>";

    if ($_FILES["imagen"]["name"] && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {

        $destino_de_ruta  ="imagenes/";

        move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_de_ruta . $_FILES["imagen"]["name"]);

        echo "El archivo " .$_FILES["imagen"]["name"] . " se ha subido correctamente. </br>";
    }else{
        echo "El achivo no se ha podido copiar al directorio de imagenes. </br>";
    }
}


$titulo=$_POST["campo_titulo"];
$fecha=date('Y-m-d H:i:s');
$comentario=$_POST["area_comentarios"];
$imagen=$_FILES["imagen"]["name"];


$miconsulta="insert into contenido (titulo, fecha, comentario,imagen) value ('$titulo','$fecha','$comentario','$imagen')";

$resultado=mysqli_query($miconexion,$miconsulta);

mysqli_close($miconexion);

echo "Se ha agregado el comentario correctamente";



