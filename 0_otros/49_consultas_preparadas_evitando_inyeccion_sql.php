<?php

require("0_conexion.php");

$pais_origen = $_GET["pais_origen"];

//1 paso crear la consulta
$query = "select id_producto,nombre_articulo from productos where pais_origen=?";

//2 paso es preparar la consulta, lo cual nos devuelve un objeto stmt  
$resultado = mysqli_prepare($conexion, $query);

//3 paso unir parametros
$ok = mysqli_stmt_bind_param($resultado, "s", $pais_origen);

// 4 paso ejecutar la consulta
$ok = mysqli_stmt_execute($resultado);


if ($ok == false) {
    echo "Error al ejecutar la consulta";
} else {

    //5 paso, nos devolvera el recordset data en memoria, tenemos que asociar los campos con variables
    $ok = mysqli_stmt_bind_result($resultado, $id_producto,$nombre_articulo);

    echo "Articulos encontrados: <br>";

    //6 paso leer los resultados, FIN
    while (mysqli_stmt_fetch($resultado)) {

        echo $id_producto ." ";
        echo $nombre_articulo." ";
        echo "<br>";
    }

    mysqli_stmt_close($resultado);
}
