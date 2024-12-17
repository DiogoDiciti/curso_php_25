<?php
// Função para verificar se o número é primo
function verificarPrimo($numero) {
    if ($numero <= 1) {
        return false; // Números menores ou iguais a 1 não são primos
    }

    // Loop para verificar se o número tem algum divisor além de 1 e ele mesmo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Se o número for divisível por $i, não é primo
        }
    }

    return true; // Se não encontrou divisores, o número é primo
}

// Exemplo de uso da função
$numero = 29;

if (verificarPrimo($numero)) {
    echo "$numero é um número primo.";
} else {
    echo "$numero não é um número primo.";
}
?>