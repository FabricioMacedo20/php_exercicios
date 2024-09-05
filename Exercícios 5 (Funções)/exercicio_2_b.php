<?php


function ehPar($numero) {
    return $numero % 2 == 0;
}

$numero = 7;
$resultado = ehPar($numero);

if ($resultado) {
    echo "$numero é par.";
} else {
    echo "$numero é ímpar.";
}
