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
      /*16 - As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e escreva o custo total da compra.*/

     $quantidade=15;
     $valorCompra=0;

     if ($quantidade >=12){
     $valorCompra = $quantidade * 1.00;
     echo "<p>O valor total da sua compra deu R$" . $valorCompra.",00</p>";
     }else{
     $valorCompra = $quantidade * 1.30;
      echo "<p>O valor total da sua compra deu R$" . $valorCompra. ",00</p>" ;
     }  
    
    ?>
</body>
</html>