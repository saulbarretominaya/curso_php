<?php


try {
    $conexion = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");

    echo "Conexion ok";
} catch (Exception $e) {

    echo $e->getMessage();
} finally {

    $conexion=null;
}
