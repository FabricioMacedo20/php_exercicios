<?php

function somar($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "Erro: Divisão por zero!";
    } else {
        return $a / $b;
    }
}

$operacao = 2; 
$num1 = 20;
$num2 = 5;

$resultado = "";
if ($operacao == 1) {
    $resultado = somar($num1, $num2);

} elseif ($operacao == 2) {
    $resultado = subtrair($num1, $num2);

} elseif ($operacao == 3) {
    $resultado = multiplicar($num1, $num2);

} elseif ($operacao == 4) {
    $resultado = dividir($num1, $num2);

} else {
    $resultado = "Operação inválida.";
}

echo "Resultado: " . $resultado;

