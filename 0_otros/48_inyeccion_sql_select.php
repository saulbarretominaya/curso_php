<?php

require("0_conexion.php");

$usuario = $_GET["usuario"];
$password = $_GET["password"];

$query = "select * from usuarios where usuario='$usuario' and password='$password'";
echo $query ."<br>"; 

$resultado = mysqli_query($conexion, $query);

/*foreach ($resultado as $resultado) {

        echo $resultado["id_usuario"] ." ";
        echo $resultado["usuario"] ." ";
        echo $resultado["password"] ." ";
        echo $resultado["nombre_completo"] ." ";
        echo "<br>";
}
mysqli_fetch_row => Es para recorrer array indexados

while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

    echo $fila["id_usuario"] . " ";
    echo $fila["usuario"] . " ";
    echo $fila["password"] . " ";
    echo $fila["nombre_completo"] . " ";
    echo "<br>";
} */

//echo $query;

while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

    echo "Bienvenido: ". $fila["nombre_completo"] . " ";
    echo "<br>";
}
