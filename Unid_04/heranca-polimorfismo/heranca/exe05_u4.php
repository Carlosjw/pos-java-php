<?php

include("Personagem.php");
$luke = new Personagem();
$luke->nome = "Luke Skywalker";
$luke->sabre_de_luz = "Azul";
$luke->forca_mental = "40";
$luke->habilidade_fisica = "60";
$anakin = new Personagem();
$anakin->nome = "Anakin Skywalker";
$anakin->sabre_de_luz = "Vermelho";
$anakin->forca_mental = "60";
$anakin->habilidade_fisica = "40";
$luke->Mostra_dados();
$anakin->Mostra_dados();

?>