<?php
include("Conta.php");
class contaPoupanca extends Conta
{
    public function sacar($quantia)
    {
        if ($this->saldo >= $quantia) {
            $this->saldo -= $quantia;
            echo "Operações: <br>";
            echo "Valor ".$quantia." foi sacado da conta Poupança.<br>";
        } else {
            return false; // retirada não permitida!
        }

        return true; // retirada permitida
    }

    public function depositar($quantia)
    {
        $this->saldo += $quantia;
        echo "Operações: <br>";
        echo "Valor ".$quantia." foi depositado na conta Poupança.<br>";
    }
}
