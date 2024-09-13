<?php
// Exemploo do laço de repetição FOR
$NPostagens = 7;
for($Cont = $NPostagens; $Cont > 0; $Cont--){
    echo "Postagem " . $Cont . "- <b>Título</b> " . $Cont . "<br>";
    echo "Conteúdo da postagem " . $Cont . "<br>";
    echo "Autor e data da postagem " . $Cont . "<br><br>";
}
?>