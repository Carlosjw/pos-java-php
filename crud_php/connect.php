<?php
header("Content-Type: text/html; charset=utf-8", true);
define("USUARIO", "root");
define("SENHA", "");
define("DB", "crud_basico");
define("SERVER", "127.0.0.1");

// Cria a conexão
$conn = new mysqli(SERVER, USUARIO, SENHA, DB);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
