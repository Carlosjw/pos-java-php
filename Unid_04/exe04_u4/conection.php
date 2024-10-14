<?php
header("Content-type: text/html; charset=utf-8", true);
define("SERVER", "127.0.0.1");
define("USUARIO", "root");
define("SENHA", "");
define("DB", "unidade04");

$conection = mysqli_connect(SERVER, USUARIO, SENHA, DB);
$message = "";
if (mysqli_connect_errno()) {
    echo "Falha na conexão com o Banco de Dados: '<b>" . DB . "</b>'";
} else{
    $message = "Conexão com o Banco de Dados '<b>".DB."</b>' realizada com sucesso!";
    include("exe04_u4.php");
}
