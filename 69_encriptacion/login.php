<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

    <form action="pagina_insertar_usuario.php"  method="post">
        <table align="center">
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit"></td>
            </tr>
        </table>
    </form>

</body>
</html>