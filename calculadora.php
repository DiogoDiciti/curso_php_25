<?php 

/**
 *  operadores (+ - * /)
 */

$numero = 1;
$numero2 = 2;
$operador = "+";

if ($operador == "+"){
echo "a soma é " . $numero + $numero2 . "<br>obrigado";
} elseif ($operador == "-"){
    echo "a subtração é " . $numero - $numero2;
} elseif ($operador == "*"){
    echo "a multiplicação é " . $numero * $numero2;
} elseif ($operador == "/"){
    echo "a divisão é " . $numero / $numero2;
} else {
    echo "operador invalido !";
}