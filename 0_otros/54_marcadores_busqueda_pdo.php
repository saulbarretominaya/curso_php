<?php


try {
    $objconexion = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");

    $nombre_articulo = $_POST["nombre_articulo"];
    $pais_origen = $_POST["pais_origen"];

    $query = "select id_producto, nombre_articulo, precio, fecha, pais_origen from productos where nombre_articulo = :m_nom_art and pais_origen= :m_pai_ori ";

    $resultado = $objconexion->prepare($query);

    $resultado->execute(array(":m_nom_art" => $nombre_articulo,":m_pai_ori"=>$pais_origen));

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {

        echo $fila["id_producto"] . " ";
        echo $fila["nombre_articulo"] . " ";
        echo $fila["precio"] . " ";
        echo $fila["fecha"] . " ";
        echo $fila["pais_origen"] . " ";
        echo "<br>";
    }
} catch (Exception $e) {
    echo 'Error de Linea de Codigo: '. $e->getLine();
    
} finally {

    $conexion = null;
}
