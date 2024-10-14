<?php
include("Conta.php");

//cria o objeto cta baseado na classe conta
$cta = new Conta('001','1234-5','100');

//mostra os dados da conta recem criada
echo $cta->mostra_informacoes();

//retira quantida da conta
$cta->sacar(100.25);

//mostra o saldo atual
echo $cta->mostra_saldo();

//deposita quantia na conta
$cta->depositar(250.75);

//mostra os dados da conta
echo $cta->mostra_informacoes();

?>