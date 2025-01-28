<?php

    /*public function sacar() {}
    public function depositar() {}
    public function pix () {}
    public function verSaldo() {}
    public function extrato() {}
*/

class ContaBancaria {
    public $titular = "";
    public $destinatario = "";
    public $saldo = 100;
    public $historico = [];
    public $minhaConta = "Diogo Diciti"; 

    // sacar o dinheiro
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

    // depositar dinheiro na conta
    public function depositar($valor) {
        if ($valor <= 0) {
            echo "O valor a ser depositado deve ser positivo.";
            return false;
        }
        $this->saldo += $valor;
        $this->historico[] = "Depósito de R$" . number_format($valor, 2, ',', '.');
        return true;
    }

    // Fazer um PIX
    public function pix($valor, $destinatario) {
        if ($valor <= 0) {
            echo "O valor do PIX deve ser positivo.";
            return false;
        }
        if ($this->saldo < $valor) {
            echo "Saldo insuficiente para o PIX.";
            return false;
        }
        $this->saldo -= $valor;
        $this->destinatario = $destinatario;
        $this->historico[] = "PIX de R$" . number_format($valor, 2, ',', '.') . " para $destinatario";
        return true;
    }

    // visualizar o saldo da conta
    public function verSaldo() {
        echo "Saldo atual: R$" . number_format($this->saldo, 2, ',', '.') . "<br>";
    }


}