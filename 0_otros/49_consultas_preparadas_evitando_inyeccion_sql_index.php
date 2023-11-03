<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    table{
        border-style: dotted;
        border-width: 5px;
        border-color: #85B5E1;
        margin: 0 auto;
        
    }

    </style>

</head>

<body>

    <form action="49_consultas_preparadas_evitando_inyeccion_sql_2.php" method="get">
        <table>
            <tr>
                <td>Introduce el Pais</td>
                <td><input type="text" name="pais_origen"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Buscar"></td>
            </tr>
        </table>

    </form>

</body>

</html>