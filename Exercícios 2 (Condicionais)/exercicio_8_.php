<?php

$preco_etiqueta = 155.00; 
$condicao_pagamento = rand(1, 4);

echo "Preço: R$" . number_format($preco_etiqueta, 2, ',', '.') . "<br>";
echo "Condição de pagamento: " . $condicao_pagamento . "<br>";

if ($condicao_pagamento == 1) {
    $valor_final = $preco_etiqueta * 0.90;
    echo "Pagamento à vista em dinheiro. Valor final: R$" . number_format($valor_final, 2, ',', '.');


} elseif ($condicao_pagamento == 2) {
    $valor_final = $preco_etiqueta * 0.95;
    echo "Pagamento à vista no cartão. Valor final: R$" . number_format($valor_final, 2, ',', '.');


} elseif ($condicao_pagamento == 3) {
    $valor_final = $preco_etiqueta;
    echo "Pagamento em 2 vezes. Valor final: R$" . number_format($valor_final, 2, ',', '.');


} elseif ($condicao_pagamento == 4) {
    $valor_final = $preco_etiqueta * 1.10;
    echo "Pagamento em 3 vezes. Valor final: R$" . number_format($valor_final, 2, ',', '.');

    
} else {
    echo "Condição de pagamento inválida.";
}

