<?php

$ano_nascimento = 2004; 


$ano_atual = date("2024");

$idade = $ano_atual - $ano_nascimento;
echo "A pessoa tem " . $idade . " anos.<br>";


//voto
if ($idade >= 16) {
    echo "Já pode votar.<br>";
} else {
    echo "Ainda não pode votar.<br>";
}



//cnh
if ($idade >= 18) {
    echo "Já pode tirar a Carteira de Habilitação.";
} else {
    echo "Ainda não pode tirar a Carteira de Habilitação.";
}

