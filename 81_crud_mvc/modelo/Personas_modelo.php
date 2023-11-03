<?php

class Personas_modelo
{

    private $db;
    private $personas;

    function __construct()
    {

        require_once("Conectar.php");
        $this->db = conectar::conexion();
        $this->personas = array();
    }

    public function get_personas()
    {

        require ("Paginacion.php");

        $consulta = $this->db->query("select * from datos_usuarios LIMIT $empezar_desde, $tamaño_paginas");

        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {

            $this->personas[] = $filas;
        }

        return $this->personas;
    }
}
