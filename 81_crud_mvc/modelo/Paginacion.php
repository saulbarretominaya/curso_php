<?php 

// ------------------------------- Ininio de paginacion-------------------------------------

require_once("Conectar.php");

$base=Conectar::conexion();

$tamaño_paginas = 3; //muestra cuantos registros veo por pagina

if (isset($_GET["pagina"])) {

  if ($_GET["pagina"] == "1") {
    echo header("Location:index.php");
  } else {

    $pagina = $_GET["pagina"];
  }
} else {

  $pagina = 1; //pretende mostrar la pagina en la que estamos al cargar nuestra pagina web
}
$empezar_desde = ($pagina - 1) * $tamaño_paginas;

$sql = "select * from datos_usuarios where estado='1'";
$resultado = $base->prepare($sql);
$resultado->execute(array());

$num_filas = $resultado->rowCount(); //devuelve el numero de filas de un array

$total_paginas = ceil($num_filas / $tamaño_paginas); //devuelve el numero total de paginas hacia arriba, verificar en la pagina de php. 
// ------------------------------- Fin de paginacion-------------------------------------

?>