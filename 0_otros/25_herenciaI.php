<?php 


include("25_herencia.php");

//1 Objeto
$toyota = new Coche();
$toyota->establece_color("Rojo", "Toyota");

//2 Objeto
$hyundai=new Camion();
$hyundai->establece_color("Verde","Hyundai");
$hyundai->arrancar();

