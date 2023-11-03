<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        td {
            border: 1px dotted #ff0000;
        }
    </style>

</head>


<body>

    <table>
        <tr>
            <td>NOMBRE DEL ARTICULO</td>

            <?php


            foreach ($matrizProductos as $registro) {

                echo "<tr><td>" . $registro["nombre_articulo"] . "</td></tr>";
            }

            ?>

    </table>

</body>

</html>