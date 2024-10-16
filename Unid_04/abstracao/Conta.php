<?php
abstract class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    // Método consructor
    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    // MÉTODO PARA MOSTRAR AS INFORMAÇÕES DA CONTA
    public function mostra_informacoes()
    {
        $retorno = "------------------------------------------------ <br>";
        $retorno = $retorno . "Dados da conta <br>";
        $retorno = $retorno . "Agencia: " . $this->agencia . "<br>";
        $retorno = $retorno . "Conta: " . $this->conta . "<br>";
        $retorno = $retorno . "Saldo: " . $this->saldo . "<br>";
        $retorno = $retorno . "------------------------------------------------<br>";
        return $retorno;
    }

    // MÉTODO PARA DEPOSITAR DINHEIRO NA CONTA
    abstract function depositar($quantia);

    // MÉTODO PARA MOSTRAR SALDO DA CONTA
    public function mostra_saldo()
    {
        return "Saldo atual: ".$this->saldo."<br>";
    }

    // MÉTODO PARA SACAR DINHEIRO DA CONTA
    abstract function sacar($quantia);
}
