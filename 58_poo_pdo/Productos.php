
<?php

require("Conexion.php");

class Productos extends Conexion //Herencia.
{


    function __construct()
    {

        parent::__construct(); //con el parent  llamamos al constructor o variable de la clase padre (Conexion), herencia revisar. lo que hace eso es ejecutar la conexion con la base de datos.
    }


    function listar_productos()
    {
        $sql = "select * from productos";
        $st=$this->objconexion->prepare($sql);
        $st->execute(array());
        $resultado=$st->fetchAll(PDO::FETCH_ASSOC); //CREAMOS LA VARIABLE RESULTADO PARA LLAMAR A LA FUNCTION fetchAll DE LA LIBRERIA PDO

        return $resultado;

        /*
        MYSQLI
        $sql = "select * from productos";
        $query= $this->objconexion->query($sql);
        $resultado= $query->fetch_all(MYSQLI_ASSOC);
        return $resultado;
*/
    }
}


?>