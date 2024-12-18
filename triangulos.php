<?php

 /**
 * dados 3 medidas informadas pelo usuario
 * diga qual é o tipo do triangulo:
 *  1 - equilatero
 *  2 - isosceles
 *  3 - escaleno
 */

$ladoA = 10;
$ladoB = 10;
$ladoC = 10;

if ($ladoA == $ladoB && $ladoB == $ladoC){
   echo "As medidas informadas formam um triangulo Equilátero.";
}elseif ($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC) {
   echo "As medidas informadas formam um triangulo Isósceles.";{
} else
   echo "As medidas informadas formam um triangulo Escaleno.";
}