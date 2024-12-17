<?php

function verificarPrimo($numero) {
    $limitador = $numero - 1;
    $primo = true;

    // Caso o número seja menor que 2, não é primo
    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i <= $limitador; $i++) {
            // Verifica se o número é divisível por $i
            $resto = $numero % $i;
            if ($resto == 0) {
                $primo = false;
                break;
            }
        }
    }

    if ($primo) {
        echo "<br>O $numero é primo.";
    } else {
        echo "<br>O $numero NÃO é primo.";
    }
}
