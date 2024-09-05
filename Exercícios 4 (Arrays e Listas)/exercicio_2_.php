<?php


function analisarNumeros($numeros) {
    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero < 0) {
            $negativos++;
        } elseif ($numero > 0) {
            $positivos++;
        }

        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    return [
        'negativos' => $negativos,
        'positivos' => $positivos,
        'pares' => $pares,
        'impares' => $impares
    ];
}


$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = (int)readline("Digite o número " . ($i + 1) . ": ");
}


$resultados = analisarNumeros($numeros);
echo "Quantidades:\n";
echo "Negativos: " . $resultados['negativos'] . "\n";
echo "Positivos: " . $resultados['positivos'] . "\n";
echo "Pares: " . $resultados['pares'] . "\n";
echo "Ímpares: " . $resultados['impares'] . "\n";


