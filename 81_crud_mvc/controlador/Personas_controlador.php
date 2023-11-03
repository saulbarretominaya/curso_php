<?php

require_once("modelo/Personas_modelo.php");

$persona = new Personas_modelo(); //Instanciando a la clase y llamando al contructor

$matrizPersonas = $persona->get_personas();

require_once("vista/Personas_vista.php");
