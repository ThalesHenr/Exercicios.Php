<?php

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    //if ($valor2 ==0) {
        while ($valor2 == 0) {
            echo "<script type='text/javascript'> alert('O número divisor não pode ser zero! Escolha outro número!'); location.href='form-ex-44-while.php';</script>";
        }
    //}
    $resultado = $valor1 / $valor2;

    echo "O resultado é $resultado";

?>