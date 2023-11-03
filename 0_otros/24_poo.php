
    <?php

    class Coches
    {
        //propiedades
        var $color;
        var $ruedas;
        var $motor;

        //metodo consructor: indica el estado inicial al objeto
        function __construct()
        {

            $this->color = "";
            $this->ruedas = 4;
            $this->motor = 1600;
        }

        //metodos

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

        function establecer_color($color_coche, $nombre_coche)
        {
            $this->color = $color_coche;

            echo "El color del " . $nombre_coche . " es: " . $this->color . "<br/>";
        }
    }

    /*----------------------------------------------------------------*/

    class Camion
    {
        //propiedades
        var $color;
        var $ruedas;
        var $motor;

        //metodo consructor: indica el estado inicial al objeto
        function __construct()
        {

            $this->color = "";
            $this->ruedas = 8;
            $this->motor = 2600;
        }

        //metodos

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
    }

    ?>
