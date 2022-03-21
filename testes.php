<?php

$valor = 0;
$valor2 = 0;

do {
    $valor = readline("Digita um valor: ");
    $valor2 = readline("Digita um valor: ");
} while ($valor2 == 0);

$resultado = $valor / $valor2;

echo "O resultado é $resultado".PHP_EOL;

while($valor2==0) {
    $valor = readline("Digita saporra de valor: ");
    $valor2 = readline("Digita saporra de valor 2: ");
}


echo "O resultado é $resultado".PHP_EOL;

for ($x = $valor2; $x == 0; $x = $valor2) {
    $valor = readline("Digita saporra de valor: ");
    $valor2 = readline("Digita saporra de valor 2: ");
}

$resultado = $valor / $valor2;
echo "O resultado é $resultado".PHP_EOL;

$n1 = 11;
$n2 = 12;
do {

}while(($n1 > 10) || ($n1 < 0) || ($n2 > 10) || ($n2 < 0));

$media = ($n1 + $n2) / 2;

echo "A tua média é de $media".PHP_EOL;
