
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

<?php
//Descobrir se o número é primo ou não.

$numero = $_POST['number'] ?? null;

if($numero <= 1) {
    echo "Números menores ou iguais a 1 não são considerados primos.";    
    exit;
}

$divisores = 0;

for($i = 2; $i < $numero; $i++){
    if ($numero % $i == 0){ //$i é o divisor (dividindo sempre por 2)
        echo "O número " . $numero . " pode ser divido por $i.<br />"; //quais números dividiram $numero. 
        $divisores++;
        } 
    }
    if ($divisores == 0) {
        echo "É primo!";
    } else {
        echo "Portanto " .$numero . " não é primo!<br> Ele possui $divisores divisor(es) além de 1 e ele mesmo.";
    }
?>

