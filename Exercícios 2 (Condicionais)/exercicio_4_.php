<?php

$nota1 = 7.5;
$nota2 = 5.0;
$media = ($nota1 + $nota2) / 2;


if ($media >= 6.0) {
    echo "Aluno aprovado! Média: " . number_format($media, 1, ',', '.');

} else {
    echo "Aluno reprovado! Média: " . number_format($media, 1, ',', '.');
}

