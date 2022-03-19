<?php

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    if ($valor2 ==0) {
        do {
            echo "<script type='text/javascript'> alert('O número divisor não pode ser zero! Escolha outro número!'); location.href='form-ex-44-do.php';</script>";
        } while ($valor2 == 0);
    }
    $resultado = $valor1 / $valor2;

    echo "O resultado é $resultado";

?>