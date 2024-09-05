<?php


function lerNumero() {
    return trim(readline());
}

$vetorA = array();
$vetorB = array();

echo "Digite 10 números para o vetor A:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Número " . ($i + 1) . " para vetor A: ";
    $vetorA[$i] = lerNumero();
}

echo "Digite 10 números para o vetor B:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Número " . ($i + 1) . " para vetor B: ";
    $vetorB[$i] = lerNumero();
}

echo "Multiplicação dos elementos dos vetores:\n";
for ($i = 0; $i < 10; $i++) {
    $resultado = $vetorA[$i] * $vetorB[$i];
    echo "vetorA[$i] * vetorB[$i] = $resultado\n";
}



