<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        background-color: #ffc;
        padding: 5px;
        border: #666 5px solid;
    }
</style>

<body>

    <form action="validacion.php" method="post">
        <table width="15%" align="center">
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><input type="text" name="edad"></td>
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