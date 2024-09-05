<?php

$soma = 0;
$quantidade = 0;
echo "Digite valores inteiros (digite 0 para encerrar):\n";


while (true) {
    $valor = (int)readline("Valor: ");
    
    if ($valor == 0) {
        break;
    }
    
    $soma += $valor;
    $quantidade++;
}

$media = ($quantidade > 0) ? $soma / $quantidade : 0;

echo "A somatória dos valores é: " . $soma . "\n";
echo "A média dos valores é: " . number_format($media, 2, ',', '.') . "\n";
echo "Quantidade de valores lidos: " . $quantidade . "\n";

