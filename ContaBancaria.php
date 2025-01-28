<?php

class ContaBancaria {
    public $titular = "";
    public $destinatario = "";
    public $saldo = 0;
    public $historico = [];

    public function sacar($valor) {
    if ($valor > $this->saldo) {
        return "Saldo insuficiente para o saque de R$ $valor.";
    }
     $this->saldo -= $valor;
        $this->historico[] = "Saque de R$ $valor.";
            return "Você sacou R$ $valor.";
    }  

    public function depositar($valor) {
        if ($valor <= 0) { // primeiro para vereficar se o valor é negativo ou zero...
            return "Impossível depositar esse valor.<br>";    
        } 
        $this->saldo += $valor; // Atualiza o saldo da conta.
        $this->historico[] = "Depósito de R$ $valor"; // Adiciona lá no historico.
        return "Você depositou R$ $valor.";
    }    

    public function pix() {

        $this->setHistorico("Joao", "Pedro", 100);
    }
    public function verSaldo() {}

    private function setHistorico($titular, $destinatario, $valor) {
        $arrDestinatario = [
            $destinatario => $valor,
        ];

        $arrTitular = [
            $titular => $arrDestinatario,
        ];

        $this->historico[] = $arrTitular;
    }

    public function extrato() {
        // $this->historico = [
        //     "odair" => [
        //         "ariel" => 20.50
        //     ],
        //     "ariel" => [
        //         "diego" => 50
        //     ]
        // ];

        for($i=0; $i < count($this->historico); $i++) {
            foreach($this->historico[$i] as $titular => $destinatarios) {
                foreach($destinatarios as $destinatario => $valor) {
                    echo "Titular: $titular Destinatario: $destinatario valor: R$ $valor.<br>";
                }
            }
        }

    }
}

$conta = new ContaBancaria();
$conta->pix(800);
echo $conta->extrato();