<?php
class Funcionario {
    public $nome;
    protected $salario;
    private $rg;
    public $desligado;
    public $depto;
};

$pedreiro = new Funcionario();

$TecTI = new Funcionario();
$AnalistaTi = new Funcionario();

$TecTI -> nome = "Pedro";
$AnalistaTi -> nome = "John Connor";

echo "Os funcionários '". $TecTI->nome."' e '".$AnalistaTi-> nome."'.<br>";

class Carro{
    // Características do carro
    public $marca = '';
    public $modelo = '';
    public $cor ='';
    public $qtde_comb = '';
    public $tam_tanque = '';
}

$MyCar = new Carro();
$MyWifeCar = new Carro();

$MyCar -> marca = "Fiat";
$MyWifeCar -> marca = "Hyundai";

echo "Minha esposa tem um '". $MyWifeCar -> marca . "' e eu tenho um '" . $MyCar -> marca . "'.";
