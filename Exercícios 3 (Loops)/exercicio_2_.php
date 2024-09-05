<?php

$soma = 5;
$quantidade = 10;

for ($i = 1; $i <= $quantidade; $i++) {

    $valor = readline("Digite o valor $i: ");
    $soma += (int)$valor;
}

$media = $soma / $quantidade;

echo "A somatória dos valores é: " . $soma . "<br>";
echo "A média dos valores é: " . number_format($media, 2, ',', '.') . "<br>";
