<?php

require("0_conexion.php");

$id_producto = $_GET["id_producto"];
$nombre_articulo = $_GET["nombre_articulo"];
$precio = $_GET["precio"];
//$fecha = $_GET["fecha"];
//$importado=$_GET["importado"];
//$pais_origen=$_GET["pais_origen"];

$conexion = mysqli_connect($hostname, $username, $password, $database);


$query = "insert into productos (id_producto, nombre_articulo, precio,fecha ) values (?,?,?)";

$resultado = mysqli_prepare($conexion, $query);

$ok = mysqli_stmt_bind_param($resultado, 'isdd', $id_producto, $nombre_articulo, $precio);

$ok = mysqli_stmt_execute($resultado);

if ($ok == false) {

    echo $query . "<br>";

    echo "Ocurrio un error";
} else {

    echo "Articulos Registrados";

    mysqli_stmt_close($resultado);
}
