<?php

$soma = 0;
$quantidade = 0;
for ($numero = 60; $numero <= 90; $numero++) {

    if ($numero % 2 == 0) {
        $soma += $numero;
        $quantidade++;
    }
}

$media = ($quantidade > 0) ? $soma / $quantidade : 0;
echo "A somatória dos valores pares é: " . $soma . "<br>";
echo "A média dos valores pares é: " . number_format($media, 2, ',', '.') . "<br>";

