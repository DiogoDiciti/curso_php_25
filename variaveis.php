<?php

const CPF = '12345678901';
const VELOCIDADE_DA_LUZ = '320k';

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
}


echo "Ola 
    <b>
        <i>
            mundo!
        </i>
    </b>
<br>"; // <br></br> = <br/> ou <br>

$string = "joao do caminhao";
echo $string; // joao do caminhao

echo "<br>CPF: " . CPF;

$a = 10;
$b = 20;
$x =  $a + $b;
echo "<br>x: " . $x;

$soma =  10 + 10;
echo "<br>soma: " . $soma;

// Tema de casa sera fazer a tabuada (6, 7) e mostrar na tela.


