<?php
class principal
{
    // variáveis
    private $Usuario;
    private $Senha;
    private $DB;
    private $Server;
    private $conection;

    function __construct()
    {
        $Usuario = "root";
        $Senha = "";
        $DB = "blog";
        $Server = "127.0.0.1";
    }

    function conectar()
    {
        $this->conection = mysqli_connect($this->Server, $this->Usuario, $this->Senha, $this->DB);
        if (mysqli_connect_errno()) {
            $status_conection = false;
        } else {
            $status_conection = true;
        }
        return $status_conection;
    }
}
$Blog = new principal();
if($Blog->conectar()){
    header("Content-type: text/html; charset=utf-8", true);
    include("exe04_u4.php");
}else{
    $message = "Falha na conexão com o Banco de Dados: '<b>" . DB . "</b>'!!<br> Blog indisponível no momento.";
}
