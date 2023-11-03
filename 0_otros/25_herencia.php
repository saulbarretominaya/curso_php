<?php


class Coche
{

    var $color;
    var $ruedas;
    var $motor;


    function __construct()
    {
        $this->color = "";
        $this->ruedas = "4";
        $this->motor = "1600";
    }

    function arrancar()
    {
        echo "Estoy arrancando <br/>";
    }

    function gira()
    {
        echo "Estoy girando <br/>";
    }

    function frenando()
    {
        echo "Estoy frenando <br/>";
    }

    function establece_color($color, $nombre_coche)
    {
        $this->color = $color;
        echo "El $nombre_coche es de color " . $this->color . "<br/>";
    }
}


class Camion extends Coche
{

    function __construct()
    {
        $this->color = "";
        $this->ruedas = "8";
        $this->motor = "2600";
    }

    function establece_color($color, $nombre_camion)
    {
        $this->color = $color;
        echo "El $nombre_camion es de color " . $this->color . "<br/>";
    }

    function arrancar()
    {

        parent::arrancar();

        echo "el Camion";
    }
}
