<?php
include("Conta.php");
class contaPoupanca extends Conta
{
    public function sacar($quantia)
    {
        if ($this->saldo >= $quantia) {
            $this->saldo -= $quantia;
        } else {
            return false; // retirada não permitida!
        }

        return true;
    }
}
