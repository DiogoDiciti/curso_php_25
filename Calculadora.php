<?php

class Calculadora {
    public $valor1 = 0;
    public $valor2 = 0;
    public $resultado = 0;
    public $operador = "";

    public function __construct($num1, $num2)
    {
        $this->valor1 = $num1;
        $this->valor2 = $num2;
    }

    public function somar() {
        $this->operador = "+";
        $this->resultado = $this->valor1 + $this->valor2;
        return $this->__toString();
    }

    public function reset($num1 = 0, $num2 = 0)
    {
        $this->valor1 = $num1;
        $this->valor2 = $num2;
        $this->operador = "";
        $this->resultado = 0;
    }

    public function subtrair() {
        $this->operador = "-";
        $this->resultado = $this->valor1 - $this->valor2;
        return $this->__toString();
    }

    public function multiplicar() {
        $this->operador = "*";
        $this->resultado = $this->valor1 * $this->valor2;
        return $this->__toString();
    }

    public function dividir() {
        if ($this->valor2 == 0) {
            return "Erro: Não é possível dividir por zero.";
        }
        $this->operador = "/";
        $this->resultado = $this->valor1 / $this->valor2;
        return $this->__toString();
    }

    public function __toString() 
    {
        return $this->valor1 . " " . $this->operador . " " . $this->valor2 . " = " . $this->resultado;
    }
}

$calculadora = new Calculadora(25, 10 );

echo $calculadora->somar() . "<br>";
echo $calculadora->subtrair() . "<br>";
echo $calculadora->multiplicar() . "<br>";
echo $calculadora->dividir() . "<br>";

?>
