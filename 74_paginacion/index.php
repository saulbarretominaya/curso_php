<?php


try {

    $base = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");

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

    $sql = "select id_producto, nombre_articulo, precio, fecha, importado, pais_origen from productos where importado='VERDADERO'";
    $resultado = $base->prepare($sql);
    $resultado->execute(array());

    $num_filas = $resultado->rowCount(); //devuelve el numero de filas de un array

    $total_paginas = ceil($num_filas / $tamaño_paginas); //devuelve el numero total de paginas hacia arriba, verificar en la pagina de php. 

    echo "Numero de registros de la consulta " . $num_filas . "<br>";
    echo "Mostramos " . $tamaño_paginas . " tamaño por pagina <br>";
    echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<br>";

    $sqllimite = "select id_producto, nombre_articulo, precio, fecha, importado, pais_origen from productos where importado='VERDADERO' LIMIT $empezar_desde, $tamaño_paginas";
    $resultado = $base->prepare($sqllimite);
    $resultado->execute(array());
    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo " ID: " . $registro["id_producto"] . " Nombre Articulo: " . $registro["nombre_articulo"] . " Precio: " . $registro["precio"] . " Fecha: " . $registro["fecha"] . "<br>";
    }

    // Total de paginas 

    for ($i = 1; $i <= $total_paginas; $i++) {

        echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
    }
} catch (Exception $e) {

    echo "Error en la linea: " . $e->getLine();
}
