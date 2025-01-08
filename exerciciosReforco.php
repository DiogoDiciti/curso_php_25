<?php
/**
 * 1-) Recriar o exercicio da tabuada utilizando funções
 * 2-) Encontrar os 10 primeiros numeros Pares e os 10 primeiros numeros impares.
 * 3-) Econtrar os 10 primeiros numeros primos, a partir do 10
 * 4-) Ordenar em ordem crscente o array [10, 5, 2, 30, 85, 14]. 
 *          saida esperada: [2, 5, 10, 14, 30, 85]
 * Não se deve utilizar funcoes nativas do php como asort, usort e sort.
 */ 

 // Função para exibir a tabuada de um número
 function tabuada($numero) {
    for ($i = 0; $i <= 10; $i++) {
        echo "<br>$numero x $i = " . $numero * $i;
    }
 }

 tabuada(5);

 //função para descobrir se é primo

 $pares = [];
 $impares = [];


 for ($i = 0; $i <= 20; $i++) {
    $resto = $i %  2;

    if ($resto == 0) {
        $pares[] = $i; // $pares[0] = 0, $pares[1] = 2...
    } else {
        $impares[] = $i;
    }
}

echo "<br>Pares: " . implode(", ", $pares) . "<br>"; //0, 2, 4...
echo "Impares: " . implode(", ", $impares) . "<br>"; //0, 2, 4...
    