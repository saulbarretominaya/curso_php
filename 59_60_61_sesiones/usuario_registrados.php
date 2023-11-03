<?php 


session_start();

if(!isset($_SESSION["usuario"])){
    echo header("location:login.php");
}

echo "Bienvenido Usuario ". $_SESSION["usuario"] ."<br>";

?>

<a href="cerrar_login.php">Cerrar Sesion</a>