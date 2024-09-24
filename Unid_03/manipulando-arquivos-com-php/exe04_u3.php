<?php

// Nome do arquivo
$arquivo = "Tamanho_Estados_BR.txt";

// Texto a ser gravado
$Texto = "Cada um no seu quadrado!";

// Abre o arquivo no modo "a" (escrita final do arquivo)
$id = fopen($arquivo, "a");

// Mostra o número identificador do arquivo aberto
echo $id . "<br>";

// Grava o conteúdo da variável texto no final do arquivo .txt
fwrite($id, $Texto);

// Fecha o arquivo
fclose($id);
