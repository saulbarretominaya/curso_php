<?php 

require('conexion.php');

class devuelve_productos extends conexion{


    function __construct()
    {
        parent::__construct();
        
    }


    public function get_productos(){


        $resultado=$this->conexion_db->query("select * from productos");

        $productos=$resultado->fetch_all(MYSQLI_ASSOC);

        return $productos;
    }


}
