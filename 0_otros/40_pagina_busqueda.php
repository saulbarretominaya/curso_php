<style>
    table {
        width: 50%;
        border: 1px dotted #FF0000;
        margin: auto;
    }
</style>

<?php

$hostname = "localhost";
$database = "pruebas";
$username = "root";
$password = "";


$ape_paterno = $_GET["buscar"];

$conexion = mysqli_connect($hostname, $username, $password);

if (mysqli_connect_error()) {
    echo "Fallo al conectar la Base de datos";
    exit();
}

mysqli_select_db($conexion, $database) or die("No se encuentra la BD");

$query = "select * from personas where ape_materno like '%$ape_paterno%'";

$resultado = mysqli_query($conexion, $query);

while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) { ?>
    <table>
        <tr>
            <td><?php echo $fila["id"] . " "; ?></td>
            <td><?php echo $fila["nombres"] . " "; ?></td>
            <td><?php echo $fila["ape_paterno"] . " "; ?></td>
            <td><?php echo $fila["ape_materno"] . " "; ?></td>
            <td><?php echo $fila["edad"] . " "; ?></td>
        </tr>
    </table>
<?php
}

mysqli_close($conexion);



?>