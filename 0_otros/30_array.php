<?php


//Array Indexados
/*$semana[] = "Lunes";
$semana[] = "Martes";
$semana[] = "Miercoles";

for ($i = 0; $i < count($semana); $i++) {

    echo "La posicion $i es: $semana[$i] <br/>";

}

$semana[]="Jueves";

for ($i = 0; $i < count($semana); $i++) {

    echo "La posicion $i es: $semana[$i] <br/>";
}*/


//Array Asociados
$datos = array("Nombre" => "Juan", "Apellido" => "Lopez", "Edad" => "50");


//sort($datos);  //ordena los elementos de un array

foreach ($datos as $key => $val) {
    echo " El $key : $val <br/>";
}

/*$datos["direccion"]="Jr. 28 de marzo 543, la flor Carabayllo";

foreach ($datos as $key => $val) {
    echo " El $key : $val <br/>";
} */