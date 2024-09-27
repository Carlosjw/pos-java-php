<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
class Funcionario
{
    public $nome;
    protected $salario;
    private $rg;
    public $desligado;
    public $depto;

    public function AlterarSalario($Novo_Valor)
    {
        $retorno = "";
        if ($this->salario >= $Novo_Valor)
            $retorno = "O Funcionário " . $this->nome . " teve e salário diminuído. <br>";
        else
            $retorno = "O Funcionário " . $this->nome . " teve e salário aumentado. <br>";
        $this->salario = $Novo_Valor;
        return $retorno;
    }
    public function MostraSalario()
    {
        echo "O salário do funcionário " . $this->nome . " é de " . $this->salario . " reais. <br>";
    }
};

$pedreiro = new Funcionario();

$TecTI = new Funcionario();
$AnalistaTi = new Funcionario();

$TecTI->nome = "Pedro";
$AnalistaTi->nome = "John Connor";

echo "Os funcionários '" . $TecTI->nome . "' e '" . $AnalistaTi->nome . "'.<br>";

$TecTI->MostraSalario();
echo $TecTI->AlterarSalario(20000);
$TecTI->MostraSalario();
?>

<body>

</body>

</html>