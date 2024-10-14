<?php
include("Jedi.php");

// CLASSE FILHA
class Personagem extends Jedi{
    public $nome;

    public function Mostra_dados(){
        ECHO "<hr>";
        echo "<b>Dados do Personagem:</b> <br>";
        echo "<b>Nome: </b>". $this->nome."<br>";
        echo "<b>Sabre de luz:</b> ".$this->sabre_de_luz."<br>";
        echo "<b>Força mental:</b> ". $this->forca_mental."<br>";
        echo "<b>Habilidade Física:</b> ". $this->habilidade_fisica."<br>";

        $this->Tornar_se_Jedi();
    }
}
?>