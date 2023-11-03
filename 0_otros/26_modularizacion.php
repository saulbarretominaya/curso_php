<?php

class Coche
{

    // Modificadores de accesos: public, private, protected
    protected $ruedas;
    var $color;
    var $motor;

    function __construct()
    {
        $this->ruedas = "4";
        $this->color = "";
        $this->motor = "1600";
    }

    function getRuedas()
    {
        return $this->ruedas;
    }

    function setColor($color, $nombre_coche)
    {
        $this->color = "$color";
        echo "El color de $nombre_coche es: " . $this->color . "<br>";
    }

    function arrancar()
    {
        echo "Estoy arrancano<br>";
    }

    function girar()
    {
        echo "Estoy girando<br>";
    }

    function frenar()
    {
        echo "Estoy frenando<br>";
    }

    function set_color($color, $nombre_coche)
    {
        $this->color = "$color";
        echo "El color de $nombre_coche es: " . $this->color . "<br>";
    }
}


class Camion extends Coche
{

    function __construct()
    {
        $this->ruedas = "8";
        $this->color = "";
        $this->motor = "2600";
    }


    function arrancar()
    {
        parent::arrancar();
        echo "el camion";
    }
}
