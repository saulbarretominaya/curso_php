<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-style: dotted;
            border-width: 5px;
            border-color: #85B5E1;
            margin: 0 auto;

        }
    </style>

</head>

<body>

    <form action="50_consultas_preparadas_insertar_inyeccion_sql.php" method="get">
        <table>
            <tr>
                <td>ID Producto</td>
                <td><input type="text" name="id_producto"></td>
            </tr>
            <tr>
                <td>Nombre Articulo</td>
                <td><input type="text" name="nombre_articulo"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="text" name="precio"></td>
            </tr>
            <!-- <tr>
                <td>Fecha</td>
                <td><input type="date" name="fecha"></td>
            </tr>
             <tr>
                <td>Importado</td>
                <td><input type="text" name="importado"></td>
            </tr>
            <tr>
                <td>Pais de Origen</td>
                <td><input type="text" name="pais_origen"></td>
            </tr> -->
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Registrar"></td>
            </tr>
        </table>

    </form>

</body>

</html>