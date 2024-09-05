<?php


function ehMultiploDe4($numero) {
    return $numero % 4 == 0;
}

$numero = 8;
$resultado = ehMultiploDe4($numero);

if ($resultado) {
    echo "$numero é múltiplo de 4.";
} else {
    echo "$numero não é múltiplo de 4.";
}

