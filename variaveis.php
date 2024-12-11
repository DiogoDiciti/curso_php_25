<?php

const CPF = '12345678901';
const VELOCIDADE_DA_LUZ = '320k/s2';

// tipos de dados primitivos do PHP .
$string = "Um texto qualquer";
$string = "joao do caminhao"; // override = substituir oque existia.
$nomePessoa = "Diogo"; // style guide Camel case
$nome_pessoa = "Diogo2"; // style guide Snake Case
$interiro = 2;
$float = 2.5;
$double = 2.5468;
$char = 'a';

// Tipos de dados estruturais
$array = array();
$array_short =[];

$objeto = new stdClass(); // POO - OOP
$classe = new stdClass();

// POO - OOP
class CanetaAzul {
    // Atributos e/ou Propriedades
    public const COR = "Azul";
    public const PLASTICO = true;
    public $nome;
    public $tipoMaterial = "Plastico";
    public $dimensoes;
    public $tipo;

   // metodos e/ou funcoes
   public function escrever() {

   }

   public function pintar() {

   }

   public function getColor() {
    return false;
   }

   public function setColor() {
    return true;
   }
}


echo "Ola 
    <b>
        <i>
            mundo!
        </i>
    </b>
<br>"; // <br></br> = <br/> ou <br> executadas em apenas navegadores.

$string = "joao do caminhao";
echo $string; // joao do caminhao

echo "<br>CPF: " . CPF;

$a = 10;
$b = 20;
$x =  $a + $b;
echo "<br>x: " . $x;

$soma =  10 + 10;
echo "<br>soma: " . $soma;

/*

/ (divisão)
* (multiplicação)
+ (adição)
- (subtraçõ)

= 
== (igual -> comparação)
>= (maior igual)
<= (menor igual)
&& (e)
|| (ou)
. (cintatenação)
% (modulo) pego o resto da divisao

if, else, - se, senão

if (CONDICAO) {
    CONDICAO
} else if (CONDICAO_2) {
      outro CONDICAO
}

$resultado = 10 / 10; 1
$resultado = 10 % 10; 0

*/

/**
 * Exercicio 1:
 * Atribuir um valor para uma variavel chamada numero.
 *  e vamos informar ao usuario, se este numero é par ou impar.
 * 
 */

 echo "<br>";
$numero = 10;
$resto = $numero /  2; // 10 / 2 = 5
$resto = $numero %  2; // 10 / 2 = 0

if ($resto == 0) {
   echo "<br>O $numero é PAR";
} else {
    echo "<br>O $numero é IMPAR";
}

echo "<br>";

$resto = $numero % 2;

if ($resto == 0) {
    echo "<br>O $numero é PAR";
} else {
    echo "<br>O $numero é IMPAR";
}


 