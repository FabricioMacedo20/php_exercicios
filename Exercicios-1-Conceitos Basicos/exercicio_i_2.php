<?php

$numeroCarrosVendidos = 10; 
$valorTotalVendas = 50000;  
$salarioFixo = 2000;       
$comissaoPorCarro = 100;   

$comissaoTotal = $numeroCarrosVendidos * $comissaoPorCarro;
$comissaoPorVenda = 0.05 * $valorTotalVendas;

$salarioFinal = $salarioFixo + $comissaoTotal + $comissaoPorVenda;
echo "O salário final do vendedor é: " . $salarioFinal;

