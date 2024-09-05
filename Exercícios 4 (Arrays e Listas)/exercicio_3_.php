<?php



function lerNumeroPositivo() {
    $entrada = trim(readline());
    while (!is_numeric($entrada) || $entrada <= 0) {
        echo "Digite um número positivo: ";
        $entrada = trim(readline());
    }
    return $entrada;
}
$vetor = array();

echo "Digite 10 números positivos:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Número " . ($i + 1) . ": ";
    $vetor[$i] = lerNumeroPositivo();
}

$maior = $vetor[0];
$posicao = 0;

for ($i = 1; $i < 10; $i++) {
    if ($vetor[$i] > $maior) {
        $maior = $vetor[$i];
        $posicao = $i;
    }
}

echo "O maior valor é $maior e está na posição " . ($posicao + 1) . ".\n";

