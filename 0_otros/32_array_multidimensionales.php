<?php


$alimentos =
    array(
        "Fruta" => array(
            "Tropical" => "kiwi",
            "Citrico" => "mandarina",
            "Otros" => "manzana",
            
        ),
        "Leche" => array(
            "Animal" => "vaca",
            "Vegetal" => "coco",
        ),
        "Carne" => array(
            "Vacuno" => "lomo",
            "Porcino" => "pata",
        )
    );

foreach ($alimentos as $a => $b) {

    echo "$a <br />";

    foreach ($b as $c => $d) {
        echo "$c: $d <br/>";
    }
}
