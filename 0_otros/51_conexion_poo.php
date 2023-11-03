<?php

$conexion = new mysqli("localhost", "root", "", "pruebas");

$sql = "select * from productos";

$resultados = $conexion->query($sql);

while ($fila = $resultados->fetch_assoc()) {

?>
    
    <table>
        <tr>
            <td><?php echo $fila["id_producto"]?></td>
            <td><?php echo $fila["nombre_articulo"]?></td>
            <td><?php echo $fila["precio"]?></td>
            <td><?php echo $fila["fecha"]?></td>
            <td><?php echo $fila["importado"]?></td>
            <td><?php echo $fila["pais_origen"]?></td>
            
        </tr>
    </table>

    <?php


}
