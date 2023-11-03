<?php

$nombre = "Saul Minaya";

function laleyenda()
{

    global $nombre;
    $nombre = "Mi nombre es " . $nombre;
    
}

laleyenda();

echo $nombre;
