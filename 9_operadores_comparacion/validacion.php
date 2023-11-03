<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .no_validado{
        font-size: 18px;
        color: #F00;
        font-weight: bold;
    }

    .validado{
        font-size: 18px;
        color: #0CE;
        font-weight: bold;
    }
</style>

<body>

</body>

</html>

<?php

if (isset($_POST['enviando'])) {

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    if ($nombre == "Saul" && $edad>=18) {
        echo "<p class='validado'>Puedes entrar</p>";
    } else {
        echo "<p class='no_validado'>No puedes entrar</p>";
    }
}

?>