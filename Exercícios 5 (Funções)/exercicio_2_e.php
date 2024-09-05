<?php


function pesoIdeal($altura, $sexo) {
    if ($altura <= 0) {
        return "Altura inválida. Deve ser um valor positivo.";
    }

    if ($sexo === 'masculino') {
        $pesoIdeal = 72.7 * $altura - 58;
    } elseif ($sexo === 'feminino') {
        $pesoIdeal = 62.1 * $altura - 44.7;
    } else {
        return "Sexo inválido. Informe 'masculino' ou 'feminino'.";
    }

    return $pesoIdeal;
}

$altura = 1.75; 
$sexo = 'feminino'; 
$resultado = pesoIdeal($altura, $sexo);
echo "O peso ideal para uma pessoa com altura de $altura metros e sexo $sexo é $resultado kg.";
