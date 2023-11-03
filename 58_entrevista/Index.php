<?php


require("Datos_usuarios.php");

$objeto_usuarios = new Datos_usuarios();
$listar_productos = $objeto_usuarios->listar_datos_usuarios();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="2px">
        <tr>
            <td>ID </td>
            <td>Nombre </td>
            <td>ID </td>
        </tr>

        <?php
        foreach ($listar_productos as $a) {
        ?>
            <tr>
                <td><?php echo $a["id"] ?></td>
                <td><?php echo $a["nombre"] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>