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

    <form action="" method="post">
        <table width="15%" align="center">
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="text" name="contra"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar" name="enviando" />
                </td>
            </tr>
        </table>

    </form>


    <?php

    if (isset($_POST['enviando'])) {

        $usuario = $_POST['usuario'];
        $contra = $_POST['contra'];

        $resultado = $usuario == "Saul" && $contra == "123" ? "Puedes Acceder" : "No puedes Acceder";

        echo $resultado;
    }

    ?>

</body>

</html>