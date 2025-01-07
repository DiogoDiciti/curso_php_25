<?php
$data = "31/01/2025";

list($dia, $mes, $ano) = explode('/', $data); // Extraímos dia, mês e ano de forma mais facil

$dia = (int) $dia[0];
$mes = (int) $mes[1];
$ano = (int) $ano[2];

function bissexto($ano) {
    return (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0));
}

function mesesValidos($mes) {
    return $mes >= 1 && $mes <= 12;
}

function validaDia($dia, $mes, $ano) {
    $diasPorMes = [
        1 => 31, 3 => 31, 5 => 31, 7 => 31, 8 => 31, 10 => 31, 12 => 31, // Meses com 31 dias
        4 => 30, 6 => 30, 9 => 30, 11 => 30, // Meses com 30 dias
        2 => bissexto($ano) ? 29 : 28, // Fevereiro com 29 dias se for bissexto, 28 caso contrário
    ];
    
    return isset($diasPorMes[$mes]) && $dia <= $diasPorMes[$mes];
}

// Verifica se o mês é válido
if (!mesesValidos($mes)) {
    echo "$mes é inválido!<br>";
} else {
    // Verifica se o dia é válido para o mês e ano fornecidos
    if (validaDia($dia, $mes, $ano)) {
        echo "Data válida.<br>";
    } else {
        echo "Dia inválido.<br>";
    }
    
    // Verifica se o ano é bissexto
    echo bissexto($ano) ? "$ano é um ano bissexto.<br>" : "$ano não é um ano bissexto.<br>";
}

echo "$mes é " . (mesesValidos($mes) ? "válido" : "inválido") . "!<br>";
echo "A data é $dia/$mes/$ano.<br>";
