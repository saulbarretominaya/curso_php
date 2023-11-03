<?php 


include ("24_poo.php");

$toyota =new Coches();
$pegaso =new Camion();

echo "El Toyota tiene " .$toyota->ruedas ." ruedas <br>";

echo "El Pegado tiene " .$pegaso->ruedas ." ruedas <br>";

$toyota->establecer_color("Rojo","Toyota");

?>