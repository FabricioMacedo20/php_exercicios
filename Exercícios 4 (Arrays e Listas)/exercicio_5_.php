<?php



function lerNumero() {
    return trim(readline());
}

$vetor = array();
echo "Digite 10 números:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Número " . ($i + 1) . ": ";
    $vetor[$i] = lerNumero();
}

echo "Números na ordem inversa:\n";
for ($i = 9; $i >= 0; $i--) {
    echo $vetor[$i] . "\n";
}

