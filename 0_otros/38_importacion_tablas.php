
<style>

table{
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

$conexion = mysqli_connect($hostname, $username, $password);

if (mysqli_connect_error()) {
    echo "Fallo al conectar la Base de datos";
    exit();
}

mysqli_select_db($conexion, $database) or die("No se encuentra la BD");

$query = "select * from personas";
$resultado = mysqli_query($conexion, $query);

while ($fila = mysqli_fetch_row($resultado)) { ?>
    <table>
        <tr>
            <td><?php echo $fila[0] . " "; ?></td>
            <td><?php echo $fila[1] . " "; ?></td>
            <td><?php echo $fila[2] . " "; ?></td>
            <td><?php echo $fila[3] . " "; ?></td>
            <td><?php echo $fila[4] . " "; ?></td>
        </tr>
    </table>
<?php
}

mysqli_close($conexion);



?>