<?php
include("contaPoupanca.php");

//cria o objeto cta baseado na classe conta
$ctaP = new contaPoupanca('001','1234-5','100');

//mostra os dados da conta recem criada
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