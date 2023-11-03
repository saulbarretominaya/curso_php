<?php 

require ("devuelve_productos.php");

$resultados=new devuelve_productos();

$array_productos=$resultados->get_productos();


foreach($array_productos as $fila){

    echo $fila["id_producto"] . " "; 
    echo $fila["nombre_articulo"] . " ";
    echo $fila["precio"] . " "; 
    echo $fila["fecha"] . " "; 
    echo "<br>";

}

