<?php
/**
 * Exercicio2:
 * Dado um numero informado pelo usuario
 * informar se ele é um numero primo
*/

//1, 2, 5, 7, 9

/*
9 / 2
9 / 3
...
9 / 8 (9 -1) $numero - 1
*/


$numero = 10;
// (9 -1) $numero - 1
$lmitador = $numero - 1;

for ($i = 2; $i <= $numero; $i++) {
     echo "i $i é primo"
}