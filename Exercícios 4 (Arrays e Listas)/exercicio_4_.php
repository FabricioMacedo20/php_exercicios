<?php



function lerNumero() {
    return trim(readline());
}

$vetorA = array();

echo "Digite 10 números:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Número " . ($i + 1) . ": ";
    $vetorA[$i] = lerNumero();
}
echo "Digite um número para multiplicar: ";

$B = lerNumero();
$vetorC = array();

for ($i = 0; $i < 10; $i++) {
    $vetorC[$i] = $vetorA[$i] * $B;
}

echo "Vetor C:\n";
for ($i = 0; $i < 10; $i++) {
    echo $vetorC[$i] . "\n";
}
