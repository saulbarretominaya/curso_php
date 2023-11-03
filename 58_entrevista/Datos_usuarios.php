<?php

require("Conexion.php");

class  Datos_usuarios extends Conexion
{



    function __construct()
    {
        parent::__construct();
    }


    function listar_datos_usuarios()
    {
        $sql="select * from datos_usuarios";
        $sentencia=$this->objconexion->prepare($sql);
        $sentencia->execute(array());
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}
