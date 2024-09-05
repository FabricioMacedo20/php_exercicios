<?php

$idade = rand(5, 30);
echo "Idade do nadador: " . $idade . " anos<br>";


if ($idade >= 5 && $idade <= 7) {
    echo "Categoria: Infantil A";

} elseif ($idade >= 8 && $idade <= 10) {
    echo "Categoria: Infantil B";

} elseif ($idade >= 11 && $idade <= 13) {
    echo "Categoria: Juvenil A";

} elseif ($idade >= 14 && $idade <= 17) {
    echo "Categoria: Juvenil B";

} elseif ($idade >= 18) {
    echo "Categoria: Sênior";

} else {
    echo "Idade fora das categorias.";
}

