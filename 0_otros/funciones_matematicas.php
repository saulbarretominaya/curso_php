<?php 


$num=5.55555;

//Redondear, funciones de la pagina php
//echo "El numero es: ". round($num,2);

//Casting implicito
$num2="5";
$num+="2";
$num2+=2;
echo "El numero 1 es: ". var_dump($num) .  "</br>";
echo "El numero 2 es: ". $num2 . "</br>";

//Casting explicito
$num3="5";

//Cuando deseo mostrar en un solo tipo de dato 
$resultado = var_dump((int)($num3));
echo "El numero 3 es: ".$resultado;
?>