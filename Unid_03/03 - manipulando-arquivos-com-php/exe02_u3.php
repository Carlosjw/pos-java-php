<?php

// Nome do arquivo
$arquivo = "Tamanho_Estados_BR.txt";

// Tamanho em bytes do texto que deve ser lido
$Tamanho =  40;

// Abreo  aquivo no modo "r" (apenas para leitura)
$id = fopen($arquivo, "r");

// Mostra o número identificador do arquivo aberto
echo $id . "<br>";

// Lê os primeiros bytes do arquivo definidos pela variável $Tamanho
$Texto = fread($id, $Tamanho);
echo $Texto;

// Lê todo o conteúdo do arquivo
/*$NewTexto = fread($id, filesize($arquivo));
echo $NewTexto;*/

// Fecha o arquivo
fclose($id);
