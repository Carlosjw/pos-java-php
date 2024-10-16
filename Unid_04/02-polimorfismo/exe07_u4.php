<?php
include("contaPoupanca.php");
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

// Cria o objeto baseado na classe contPoupanca
$ctaP= new contaPoupanca('001','5432-1', '150');
echo $ctaP->mostra_informacoes();

//retira quantida da conta
$ctaP->sacar(100.25);

//mostra o saldo atual
echo $ctaP->mostra_saldo();

//deposita quantia na conta
$ctaP->depositar(250.75);

//mostra os dados da conta
echo $ctaP->mostra_informacoes();

?>