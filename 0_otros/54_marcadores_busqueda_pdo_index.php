<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            background-color: #ffc;
            padding: 5px;
            border: #666 5px solid;
        }
    </style>

</head>

<body>

    <form action="54_marcadores_busqueda_pdo.php" method="POST" align>
        <table align="center">
            <tr>
                <td>Nombre Articulo:</td>
                <td><input type="text" name="nombre_articulo"></td>
            </tr>
            <tr>
                <td>Pais Origen:</td>
                <td><input type="text" name="pais_origen"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Buscar!"></td>
            </tr>
        </table>
    </form>

</body>

</html>