<?php
// Solicita ao usuário para digitar um número
$n = (int)readline("Digite um número para verificar se é primo: ");

// Verifica se o número é primo
$primo = true;

for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0) {
        $primo = false;
        echo "O número $n não é primo (divisível por $i).\n";
        break;
    }
}

if ($primo && $n > 1) {
    echo "O número $n é primo!\n";
} elseif ($n <= 1) {
    echo "Por favor, insira um número maior que 1.\n";
}
?>