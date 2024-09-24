<?php

// Nome do arquivo
$arquivo = "Tamanho_Estados_BR.txt";

// Abre o arquivo no modo "r" (apenas leitura)
$id = fopen($arquivo, "r");

// Mostra o número identificador do arquivo aberto
echo $id;

// Fecha o arquivo
fclose($id);
