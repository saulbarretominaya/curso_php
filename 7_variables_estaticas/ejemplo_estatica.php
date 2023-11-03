<?php


//Siempre se va mantener su valor al cerrar una funcion }

function incrementar_variable()
{

    static $contador = 0;
    $contador++;

    echo $contador . "<br>";
}


incrementar_variable();
incrementar_variable();
incrementar_variable();
incrementar_variable();

