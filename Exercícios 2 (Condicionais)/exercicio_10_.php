<?php
$valor_compra = 18.00; 

if ($valor_compra < 20.00) {
 
    $margem_lucro = 0.45;
} else {
    $margem_lucro = 0.30;
}

$preco_venda = $valor_compra * (1 + $margem_lucro);
echo "Valor de compra: R$" . number_format($valor_compra, 2, ',', '.') . "<br>";
echo "Preço de venda: R$" . number_format($preco_venda, 2, ',', '.');
