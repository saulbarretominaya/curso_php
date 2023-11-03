<?php

class Compra_vehiculo
{

    var $precio_base;
    static $descuento=0;


    function __construct($gama)
    {
        if ($gama == "urbano") {

            $this->precio_base = 1000;
        } else if ($gama = "compacto") {

            $this->precio_base = 2000;
        } else if ($gama == "berlina") {

            $this->precio_base = 30000;
        }
    }

    function climatizador()
    {
        $this->precio_base += 2000;
    }

    function tapiceria_cuero($color)
    {
        if ($color == "blanco") {

            $this->precio_base += 3000;
        } else if ($color == "beige") {

            $this->precio_base += 3500;
        } else {

            $this->precio_base += 5000;
        }
    }

    static function aplicar_descuento(){
        self::$descuento=5000;
    }


    function precio_final()
    {
        $valor_final = $this->precio_base - self::$descuento;
        return $valor_final;
    }
}

