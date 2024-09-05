<?php

function somaDivisiveis($a, $b, $c) {
    if ($a <= 1 || $b > $c) {
        return "Valores inválidos. Assegure-se de que a > 1 e b <= c.";
    }
    
    $soma = 0;
    for ($i = $b; $i <= $c; $i++) {
        if ($i % $a == 0) {
            $soma += $i;
        }
    }

    return $soma;
}

$a = 2;
$b = 5;
$c = 10;
$resultado = somaDivisiveis($a, $b, $c);

echo "A soma dos números entre $b e $c que são divisíveis por $a é $resultado.";

