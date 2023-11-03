<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">
        <p>
            <input type="text" placeholder="Num 1" name="N_numero1">
            <input type="text" placeholder="Num 2" name="N_numero2">
            <select name="N_operador">
                <option>Sumar</option>
                <option>Restar</option>
                <option>Multiplicar</option>
                <option>Division</option>
                <option>Incrementar</option>
                <option>Decrementar</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Calcular" name="N_calcular">
        </p>
    </form>

    <?php

    include "calculadora_III.php";


    ?>


</body>

</html>