<?php

// Break: Finaliza la estrucutra repetitiva.
// Continue: Hace el punto de interrupcion y continua la estructura repetitiva.
// De 2 en 2 $i+=2

for ($i = 0; $i < 10; $i++) {

    echo "El resultado es: " .$i ."<br>";

    if($i==6){
        echo " Interrumpido <br>";
        break;
    }

}

for ($i = 10; $i > -10; $i--) {

    if($i==0){
        echo "No se puede dividir entre 0 <br>";
        continue;
    }

    echo "10 / " . $i . " es = " . 10 / $i . "<br>";

}
