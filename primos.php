<?php

/**
 * Exercicio2:
 * Dado um numero informado  pelo usuario
 * informar se ele é um numero primo.
 */

 // 1, 3, 5, 7, 9

 /*
    9 / 2
    9 / 3
    ...
    9 / 8 
*/


$numero = 100;

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
        echo "<br>O $numero não é primo.";
    }

