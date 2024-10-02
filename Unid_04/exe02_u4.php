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

    // Usando o constructor
    function __construct()
    {
        $this->nome = "";
        $this->salario = 0;
        $this->rg = "";
        $this->desligado = false;
        $this->depto = "";
    }

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

$Funcionario01 = new Funcionario();
$Funcionario02 = new Funcionario();

if ($Funcionario01->nome == NULL) {
    echo "Valor nulo<br>";
} else {
    echo $Funcionario01->nome . "<br>";
    $Funcionario01->nome = "Pedro";
    $Funcionario02->nome = "John Connor";
}

if ($Funcionario01->nome == NULL) {
    echo "Valor nulo<br>";
} else {
    echo $Funcionario01->nome . "<br>";
}


$Funcionario01->MostraSalario();
echo $Funcionario01->AlterarSalario("20.000");
$Funcionario01->MostraSalario();

echo $Funcionario02->DemitirFunconario();
echo $Funcionario02->DemitirFunconario();

?>

<body>

</body>

</html>