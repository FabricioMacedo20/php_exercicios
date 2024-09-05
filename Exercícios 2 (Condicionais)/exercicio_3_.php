<?php

$quantidade_macas = 15; 


if ($quantidade_macas >= 12) {

    $custo_total = $quantidade_macas * 1.00; 
} else {

    $custo_total = $quantidade_macas * 1.30; 
}
echo "O custo total da compra é R$" . number_format($custo_total, 2, ',', '.') . ".";

