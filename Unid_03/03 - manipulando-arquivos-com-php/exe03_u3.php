<?php

// Nome do arquivo
$arquivo = "Tamanho_Estados_BR.txt";

// Número de linhas a serem lidas
$nLinhas = 4;

// Abre o arquivo no modo "r" (apenas leitura)
$id = fopen($arquivo, "r");

// Mostra o número identificador do arquivo aberto
echo $id. "<br>";

// Lê as primeiras quatro linhas do aquivo
/*for($n = 1; $n= $nLinhas; $n++){
    echo fgets($id)."<br>";
}*/

// Lê toda as linhas do arquivo
while(!feof($id)){
    echo fgets($id)."<br>";
}

// Fecha o arquivo
fclose($id);
