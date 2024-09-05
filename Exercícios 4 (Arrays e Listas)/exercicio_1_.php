<?php


function preencherArray($tamanho) {
    $array = array(); 

    for ($i = 1; $i <= $tamanho; $i++) {
        $array[] = $i * 5; 
    }

    return $array;
}

$tamanho = 10;
$numeros = preencherArray($tamanho);

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

