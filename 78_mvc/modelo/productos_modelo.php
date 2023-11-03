<?php

class productos_modelo
{

    private $db;
    private $productos;

    function __construct()
    {

        require_once("conectar.php");
        $this->db=conectar::conexion();
        $this->productos = array();
    }

    public function get_productos()
    {

    $consulta=$this->db->query("select * from productos");

    while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        $this->productos[]=$filas;

    }

    return $this->productos;
    

}
}
