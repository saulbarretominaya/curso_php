
<?php

$hostname = "localhost";
$database = "pruebas";
$username = "root";
$password = "";
$port = "3306";

$conexion = mysqli_connect($hostname, $username, $password, $database, $port);
$query = "select * from datospersonales";
$resultado = mysqli_query($conexion, $query);
$lectura = mysqli_fetch_row($resultado);

echo $lectura[0]."<br>";
echo $lectura[1]."<br>";
echo $lectura[2]."<br>";

?>