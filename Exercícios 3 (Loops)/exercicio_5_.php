<?php


$maior = null;
$menor = null;
echo "Digite valores inteiros (digite 0 para encerrar):\n";


while (true) {
   
    $valor = (int)readline("Valor: ");
    
    if ($valor == 0) {
        break;
    }
    
   
    if ($maior === null || $valor > $maior) {
        $maior = $valor;
    }
    
    if ($menor === null || $valor < $menor) {
        $menor = $valor;
    }
}



if ($maior !== null && $menor !== null) {
    echo "O maior valor fornecido é: " . $maior . "\n";
    echo "O menor valor fornecido é: " . $menor . "\n";
} else {
    echo "Nenhum valor válido foi fornecido.\n";
}

