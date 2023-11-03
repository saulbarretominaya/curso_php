<?php

include ("28_variables_metodos_estaticos.php");


//Compra_vehiculo ::$descuento=200; si la variable static no esta declarado como private se puede alterar el dato

Compra_vehiculo::aplicar_descuento();

$juan = new Compra_vehiculo("urbano");
$juan->climatizador();
$juan->tapiceria_cuero("blanco");
echo "El precio final es: ".$juan->precio_final() ."<br>";


$saul = new Compra_vehiculo("compacto");
$saul->climatizador();
$saul->tapiceria_cuero("blanco");
echo "El precio final es: ".$saul->precio_final();


?>