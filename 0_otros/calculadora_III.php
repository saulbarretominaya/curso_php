<style>
    .p_class {
        font-size: 25px;
        color: #f00;
        font-weight: bold;;
    }
</style>



<?php

if (isset($_POST['N_calcular'])) {

    $N_numero1 = $_POST['N_numero1'];
    $N_numero2 = $_POST['N_numero2'];
    $N_operador = $_POST['N_operador'];

    calcular($N_operador);
}

function calcular($operador)
{

    if (!strcmp("Sumar", $operador)) {

        global $N_numero1;
        global $N_numero2;

        $resultado = ($N_numero1 + $N_numero2);

        echo "<p class='p_class'> El resultado es : $resultado</p>";
    }

    if (!strcmp("Restar", $operador)) {

        global $N_numero1;
        global $N_numero2;

        $resultado = ($N_numero1 - $N_numero2);

        echo "<p class='p_class'> El resultado es : $resultado</p>";
    }

    if (!strcmp("Multiplicar", $operador)) {

        global $N_numero1;
        global $N_numero2;

        $resultado = ($N_numero1 * $N_numero2);

        echo "<p class='p_class'> El resultado es : $resultado</p>";
    }

    if (!strcmp("Division", $operador)) {

        global $N_numero1;
        global $N_numero2;

        $resultado = ($N_numero1 / $N_numero2);

        echo "<p class='p_class'> El resultado es : $resultado</p>";
    }

    if (!strcmp("Incrementar", $operador)) {

        global $N_numero1;

        $N_numero1++;

        $resultado = $N_numero1;

        echo "<p class='p_class'> El resultado es : $resultado</p>";
    }

    if (!strcmp("Decrementar", $operador)) {

        global $N_numero1;

        $N_numero1--;

        $resultado = $N_numero1;

        echo "<p class='p_class'> El resultado es : $resultado</p>";
    }

}
