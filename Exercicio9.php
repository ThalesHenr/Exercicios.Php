<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     /*9 - Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste. 
     Calcular e escrever o valor do novo salário.*/
     
     $salario = 1212.00;
     $aumento = ($salario * 50) / 100;
     $salarioAtual = $salario + $aumento;
     echo "<p>Seu salario era $" . $salario . " Com o reajuste ficou R$" . $salarioAtual. ",00</p>";

    ?>

</body>
</html>