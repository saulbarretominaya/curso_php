<?php

include("26_modularizacion.php");

$toyota=new Coche();
$toyota->setColor("verde","Toyota");
echo $toyota->getRuedas() ."<br/>";


$hyundai=new Camion();
echo "El segundo objeto tiene un motor de: ".$hyundai->motor ."<br/>";

echo $hyundai->getRuedas();
