<?php

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    //if ($valor2 ==0) {
            for ($x = $valor2; $x == 0; $x = $valor2) {
                echo "<script type='text/javascript'> alert('O número divisor não pode ser zero! Escolha outro número!'); location.href='form-ex-44-for.php';</script>";
            }
    //}
    $resultado = $valor1 / $valor2;

    echo "O resultado é $resultado";

?>