<?php


try {
    $objconexion = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");

    $buscar=$_GET["buscar"];

    $query = "select id_producto, nombre_articulo, precio, fecha from productos where nombre_articulo =?";

    $resultado = $objconexion->prepare($query);

    $resultado->execute(array($buscar));

    while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){

        echo $fila["id_producto"] ." ";
        echo $fila["nombre_articulo"]." ";
        echo "<br>";

    }

} catch (Exception $e) {
    echo $e->getMessage();
} finally {

    $conexion = null;
}
