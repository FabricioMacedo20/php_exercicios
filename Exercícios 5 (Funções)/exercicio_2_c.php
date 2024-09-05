<?php


function somaEntreNumeros($num1, $num2) {
    if ($num1 <= 0 || $num2 <= 0 || $num1 >= $num2) {
        return "Os números devem ser positivos e num1 deve ser menor que num2.";
    }
    $soma = 0;

    for ($i = $num1 + 1; $i < $num2; $i++) {
        $soma += $i;
    }
    return $soma;
}

$num1 = 1;
$num2 = 4;
$resultado = somaEntreNumeros($num1, $num2);
echo "A soma dos números entre $num1 e $num2 é $resultado.";
