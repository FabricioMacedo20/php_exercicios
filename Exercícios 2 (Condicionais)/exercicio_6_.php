<?php

$valor1 = rand(1, 100);
$valor2 = rand(1, 100);


while ($valor1 == $valor2) {
    $valor2 = rand(1, 100);
}


echo "Valor 1: " . $valor1 . "<br>";
echo "Valor 2: " . $valor2 . "<br>";


if ($valor1 > $valor2) {
    echo "O maior valor é: " . $valor1;
    
} else {
    echo "O maior valor é: " . $valor2;
}

