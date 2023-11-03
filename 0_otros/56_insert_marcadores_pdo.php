<?php


try {
    $objconexion = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
    $objconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $nombre_articulo=$_POST["nombre_articulo"];
    $pais_origen=$_POST["pais_origen"];

    $query = "insert into productos (nombre_articulo,pais_origen) values (:m_nombre_articulo,:m_pais_origen)";

    $resultado = $objconexion->prepare($query);

    $resultado->execute(array(":m_nombre_articulo"=>$nombre_articulo,":m_pais_origen"=>$pais_origen));

    // while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){

    //     echo $fila["id_producto"] ." ";
    //     echo $fila["nombre_articulo"]." ";
    //     echo "<br>";

    // }

    echo "Registros insertados correctamente.";

} catch (Exception $e) {
    echo $e->getMessage();
} finally {

    $conexion = null;
}
