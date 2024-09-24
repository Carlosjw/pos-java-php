<?php
header("Content-Type: text/html; charset=utf-8", true);
$saldo = 1036.55; // Valor de exmplo

// Simulação de retirada de dinheiro da conta
$saldo = $saldo - 536.55;

// Grava cookie no computador com o valor atualizado do saldo
setcookie("saldoConta", $saldo, 7200);

// Recupera o cookie e compara com o valor da variável atualizada
$recuperado = $_COOKIE["saldoConta"];
echo "A variável Saldo é: " . $saldo . "<br>";
echo "Valor do saldo recuperado é: " . $recuperado;
