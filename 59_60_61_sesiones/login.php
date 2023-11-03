<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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


    <form action="comprueba_login.php" method="post">
        <table width="15%" align="center">
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar" name="enviando" />
                </td>
            </tr>
        </table>

    </form>

</body>

</html>