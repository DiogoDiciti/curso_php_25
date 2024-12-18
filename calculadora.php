<?php 

/**
 *  operadores (+ - * / #)
 * # = percentual(%)
 */

$numero = 30;
$numero2 = 200;
$operador = "%";

echo "<i><b>CALCULADORA</b></i><br><br>";

if ($operador == "+"){
echo "A soma é igual a: " . $numero + $numero2;
} elseif ($operador == "-"){
echo "A subtração é " . $numero - $numero2;
} elseif ($operador == "*"){
echo "A multiplicação é igual a: " . $numero * $numero2;
} elseif ($operador == "/"){
echo "A divisão é igual a: " . $numero / $numero2;
} elseif ($operador == "%"){
echo "A porcentagem é igual a: " . $numero - ($numero * $numero2 /100);
}