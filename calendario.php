<?php

$data = "31/01/2025"; 
// Extraindo o dia, mês e ano
$dia = substr($data, 0, 2);
$mes = substr($data, 3, 2);
$ano = substr($data, 6, 4);

// Função para verificar se o ano é bissexto
function isBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true;
    } 
    return false;
}

// Função para validar a data
function validarData($dia, $mes, $ano) {
    // Verifica se o ano é bissexto
    $bissexto = isBissexto($ano);

    // Verificando os dias de cada mês (considerando o ano bissexto para fevereiro)
    $diasPorMes = [
        1 => 31, 2 => ($bissexto ? 29 : 28), 3 => 31, 4 => 30, 5 => 31, 6 => 30,
        7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31
    ];

    // Verifica se o mês e o dia são válidos
    if ($mes < 1 || $mes > 12) {
        return echo "Mês inválido!";
    } elseif ($dia < 1 || $dia > $diasPorMes[$mes]) {
        return  echo "Dia inválido!";
    }

    return echo "Data válida!";
}

// Validando a data fornecida
$resultado = validarData($dia, $mes, $ano);
echo $resultado;
