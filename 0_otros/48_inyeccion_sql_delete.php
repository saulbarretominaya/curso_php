<?php

require("0_conexion.php");

//Preveniendo la inyeccion SQL
$usuario = mysqli_real_escape_string($conexion,$_GET["usuario"]);
$password = mysqli_real_escape_string($conexion,$_GET["password"]);

//Delete
$query = "Delete from usuarios where usuario='$usuario' and password='$password'";
echo $query . "<br>";

mysqli_query($conexion, $query);


if(mysqli_affected_rows($conexion)>0){

    echo "Baja Procesada";

}else{

    echo "No se ha encontrado informacion que borrar";

}