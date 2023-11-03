<?php 

require("Productos.php");

$productos =new Productos();

$array=$productos->listar_productos();

foreach($array as $a){

    echo $a["id_producto"];
    echo $a["nombre_articulo"];
    echo "<br>";

}
