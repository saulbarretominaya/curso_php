<?php

require_once("modelo/productos_modelo.php");

$producto = new productos_modelo(); //Instanciando a la clase y llamando al contructor

$matrizProductos = $producto->get_productos();

require_once("vista/productos_vista.php");
