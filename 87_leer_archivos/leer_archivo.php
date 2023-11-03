
<?php

$id = "";
$contenido = "";
$tipo = "";

require("conexion.php");

$conexion = mysqli_connect($hostname, $username, $password, $database);

$query = "select * from archivos where id='7'";

$resultado = mysqli_query($conexion, $query);


while ($fila = mysqli_fetch_array($resultado)) {

    $id = $fila["id"];
    $contenido = $fila["contenido"];
    $tipo = $fila["tipo"];
}

echo "ID: ".$id;
echo "Tipo: ".$tipo;
//echo "Contenido: ".$contenido;

echo "<img src='data:image/png; base64," . base64_encode($contenido). "'>";

?>