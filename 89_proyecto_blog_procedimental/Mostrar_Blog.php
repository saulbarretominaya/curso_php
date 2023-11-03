<?php



$miconexion = mysqli_connect("localhost", "root", "", "pruebas");


if (!$miconexion) {

    echo "Error en la conexion " . mysqli_connect_error();
    exit();
}



$query = "select * from contenido";

if ($resultado = mysqli_query($miconexion, $query)) {

    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "<h3>".$registro["titulo"] ."</h3>";
        echo "<h4>".$registro["fecha"] ."</h4>";
        echo "<div style='width:400px'>".$registro["comentario"]."</div>";

        if($registro["imagen"]!=""){
            echo "<img src='imagenes/".$registro["imagen"]."' width='100px'/>";
        }

        echo "</hr>";
    }
}
