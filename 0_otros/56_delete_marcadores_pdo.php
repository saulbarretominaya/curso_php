<?php


try {
    $objconexion = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
    $objconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $id_producto=$_POST["id_producto"];

    $query = "delete from productos where id_producto=:m_id_producto";

    $resultado = $objconexion->prepare($query);

    $resultado->execute(array(":m_id_producto"=>$id_producto));

    // while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){

    //     echo $fila["id_producto"] ." ";
    //     echo $fila["nombre_articulo"]." ";
    //     echo "<br>";

    // }

    echo 'Producto Eliminado';

} catch (Exception $e) {
    echo $e->getMessage();
} finally {

    $conexion = null;
}
