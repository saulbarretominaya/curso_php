<?php


class Conexion
{


    protected $objconexion;


    function __construct()
    {

        try {

            $this->objconexion = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
            return $this->objconexion;
        } catch (Exception $e) {
            echo "Error en la Linea: " . $e->getLine();
        }
    }
}
