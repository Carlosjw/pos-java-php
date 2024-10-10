<?php
// CONFIGURANDO CONEXÃO COM SERVIDOR DE BANCO DE DADOS
header("Content-Type: text/html; charset=utf-8", true);
define("USUARIO", "root");
define("SENHA", "");
define("DB", "novo-bd");
define("SERVER", "127.0.0.1");
$conexao = mysqli_connect(SERVER, USUARIO, SENHA, DB);
if (mysqli_connect_errno()) {
    echo "Falha ao conectar do no BD '<b>" . DB . ": Server: " . SERVER . "</b>!";
} else {
    echo "Conexão ao BD '<b>Server. " . SERVER . "</b>' realizada com sucesso!";
};
