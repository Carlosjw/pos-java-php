<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
class Funcionario
{
    public $nome;
    protected $salario = 0;
    private $rg;
    private $desligado;
    public $depto;

    //Métodopara alterar salário do funcionário
    public function AlterarSalario($Novo_Valor)
    {
        $retorno = "";
        if ($this->salario >= $Novo_Valor)
            $retorno = "O Funcionário " . $this->nome . " teve seu salário diminuído. <br>";
        else
            $retorno = "O Funcionário " . $this->nome . " teve seu salário aumentado. <br>";
        $this->salario = $Novo_Valor;
        return $retorno;
    }

    // Método para mostra o salário do Funcioário
    public function MostraSalario()
    {
        echo "O salário do funcionário " . $this->nome . " é de R$" . $this->salario . ",00. <br>";
    }

    // Método para demitir funcionário
    public function DemitirFunconario()
    {
        $retorno = "";
        if ($this->desligado == true) {
            $retorno = "O funcionário " . $this->nome . " já  está cadastrado como 'demitido'.<br>";
        } else {
            $this->desligado = true;
            $retorno = "O funcionário " . $this->nome . " acabou de ser demitido!!<br>";
        }
        return $retorno;
    }
};

$TecTI = new Funcionario();
$AnalistaTi = new Funcionario();

$TecTI->nome = "Pedro";
$AnalistaTi->nome = "John Connor";

$TecTI->MostraSalario();
echo $TecTI->AlterarSalario("20.000");
$TecTI->MostraSalario();

echo $AnalistaTi->DemitirFunconario();
echo $AnalistaTi->DemitirFunconario();

?>

<body>

</body>

</html>