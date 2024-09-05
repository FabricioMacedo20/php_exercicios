<?php
$salario_minimo = 1320.00; 
$quilowatts_gastos = 250;  

$valor_quilowatt = $salario_minimo / 7 / 100; 

$valor_total = $valor_quilowatt * $quilowatts_gastos; 

$valor_com_desconto = $valor_total * 0.9; 

echo "Valor de cada quilowatt: R$ $valor_quilowatt\n";
echo "Valor total a ser pago: R$ $valor_total\n";
echo "Valor com 10% de desconto: R$ $valor_com_desconto\n";

