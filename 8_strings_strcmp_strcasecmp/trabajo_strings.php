<?php

$variable1 = "CASA";
$variable2 = "CASA";

//1 = TRUE ; 0 = FALSE;
//Tener en cuenta que strcmp valida si esta en mayuscula o minuscula.
$resultado=strcmp($variable1,$variable2); //Devuelve 1 si no son iguales. 0 si son iguales.
//Tener en cuenta que strcasecmp ignora si esta en mayuscula o minuscula.
//$resultado = strcasecmp($variable1, $variable2); //Devuelve 1 si no son iguales. 0 si son iguales.


if (!$resultado) { 

    echo "Coinciden";

} else {

    echo "No Coinciden";
}
