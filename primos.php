<?php
// Função para verificar se um número é primo
function verificarPrimo($n) {
    if ($n <= 1) {
        return false; // Números menores ou iguais a 1 não são primos
    }
    
    // Laço para verificar se há divisores do número
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) { // Se o número for divisível por $i
            return false; // Não é primo
        }
    }
    
    return true; // Se não houver divisores, é primo
}

// Solicita ao usuário que insira um número
echo "Digite um número para verificar se é primo: ";
$numero = trim(fgets(STDIN));

// Verifica e exibe o resultado
if (verificarPrimo($numero)) {
    echo "$numero é primo!\n";
} else {
    echo "$numero não é primo.\n";
}
