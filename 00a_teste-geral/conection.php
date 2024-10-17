<?php
// CONFIGURANDO CONEXÃO COM SERVIDOR DE BANCO DE DADOS
header("Content-Type: text/html; charset=utf-8", true);
define("USUARIO", "root");
define("SENHA", "");
define("DB", "teste_php_db");
define("SERVER", "127.0.0.1");
$conexao = mysqli_connect(SERVER, USUARIO, SENHA, DB);
?>