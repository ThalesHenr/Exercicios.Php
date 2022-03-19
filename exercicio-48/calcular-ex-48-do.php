<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

    if (($nota1 > 10) || ($nota1 < 0) || ($nota2 > 10) || ($nota2 < 0)) {
        do {
            echo "<script type='text/javascript'> alert('A nota não pode ser menor que 0 e maior que 10! Insira as notas novamente!); location.href='form-ex-48-do.php';</script>";
            //return;
        }while(!($nota1 <= 10) || ($nota1 < 0) || ($nota2 >= 10) || ($nota2 < 0));
    }else {
        $media = ($nota1 + $nota2) / 2;

        echo "A média é de $media";
    }
?>