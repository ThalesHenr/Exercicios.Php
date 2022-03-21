<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

    do {
        if (($nota1 > 10) OR ($nota1 < 0) OR ($nota2 > 10) OR ($nota2 < 0)){
            echo "Insira um número válido!<br>";
            echo "<a href='./form-ex-48-do.php'>Voltar</a>";
            return;
        }
    }while(($nota1 > 10) OR ($nota1 < 0) OR ($nota2 > 10) OR ($nota2 < 0));
    
    $media = ($nota1 + $nota2) / 2;
    
    echo "A tua média é de $media";
?>
