<?php

$data = "31/01/2025";

$dia = substr($data, 0, 2); 
$mes = substr($data, 3, 2);
$ano = substr($data, 6, 4);

function bissexto($ano) {
   // Verifica se o ano é bissexto
   return (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0));
}

function meses($mes) {
   // Verificando se o mês é valido
   return ($mes >= 1 && $mes <= 12);
}

if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
   if ($dia <= 31) {
       echo "Data válida.<br>";
   } else {
       echo "Dia inválido.<br>";
   }
} else if ($mes == 02 && bissexto($ano)) { 
   if ($dia <= 29) {
       echo "Data válida.<br>";
   } else {
       echo "Dia inválido.<br>";
   }
} else if ($mes == 02 && !bissexto($ano)) {  // Passando o ano para bissexto
   if ($dia <= 28) {
       echo "Data válida.<br>";
   } else {
       echo "Dia inválido.<br>";
   }
} else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
   if ($dia <= 30) {
       echo "Data válida.<br>";
   } else {
       echo "Dia inválido.<br>";
   }
} else {
   echo "Mês inválido.<br>";
}

// Verificando se o ano é bissexto
if (bissexto($ano)) {
   echo "$ano é um ano bissexto.<br>";
} else {
   echo "$ano não é um ano bissexto.<br>";
}

// Verificando se o mês é válido
if (meses($mes)) {
   echo "$mes é valido !.<br>";
} else {
   echo "$mes é inválido!.<br>";
}

echo "A data é $dia/$mes/$ano.<br>";
