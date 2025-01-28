<?php

class ContaBancaria {
    public $titular = "";
    public $destinatario = "";
    public $saldo = 10000;
    public $historico = [];

    /*public function sacar() {}
    public function depositar() {}
    public function pix () {}
    public function verSaldo() {}
    public function extrato() {}
*/

    // Método para sacar dinheiro
    public function sacar($valor) {
        if ($valor <= 0) {
            echo "O valor a ser sacado deve ser positivo.";
            return false;
        }
        if ($this->saldo < $valor) {
            echo "Saldo insuficiente.";
            return false;
        }
        $this->saldo -= $valor;
        $this->historico[] = "Saque de R$" . number_format($valor, 2, ',', '.');
        return true;
    }

    // Método para depositar dinheiro
    public function depositar($valor) {
        if ($valor <= 0) {
            echo "Não é possivel depositar esse valor.";
            return false;
        }
        $this->saldo += $valor;
        $this->historico[] = "Depósito de R$" . number_format($valor, 2, ',', '.');
        return true;
    }

}    