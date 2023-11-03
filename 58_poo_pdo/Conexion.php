

<?php 


Class Conexion{

    protected $objconexion; //Si tienes dudas ir al video de modificadores de acceso. video 26


    function __construct()
    {
     

        //PDO
        try {
            $this->objconexion =new PDO("mysql:host=localhost;dbname=pruebas","root","");
        } catch (Exception $e) {
            echo 'El error se encuentra en linea ' . $e->getLine() ;
        };
        
        /*
        //MYSQLI
        $this->objconexion=new mysqli("localhost","root","","pruebas");

        if($this->objconexion->connect_error){
            echo "Fallo al conectar a MySQL" . $this->objconexion->connect_error;
            return;
        }
        $this->objconexion->set_charset("urf8");
        */
    }
}
?>