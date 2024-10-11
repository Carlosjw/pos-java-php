<?php
$Biblioteca_SQL = array();

//VALIDANDO CONEXÃO
if (mysqli_connect_errno()) {
    $message = "<p style='color: red'><b>Falha</b> ao conectar no banco de dados " . "<b>" . DB . "</b>" . "<br>Motivo: " . "<b><br>" . mysqli_connect_error() . "</b></p>";
} else {

    $message = "<p style='color: green'>Conectado ao banco de dados " . "'<b>" . DB . "</b>' no servidor " . "'<b>http://" . SERVER . "</b>'</p>";
    $sql_query = "SELECT * FROM livro";
    if ($result = mysqli_query($conexao, $sql_query)) {
        while ($sql_livro = mysqli_fetch_row($result)) {
            $Biblioteca_SQL[] = array(
                "img" => $sql_livro[1],
                "title" => $sql_livro[2],
                "author" => $sql_livro[3],
                "genre" => $sql_livro[4],
                "pages" => $sql_livro[5],
                "year" => $sql_livro[6],
                "sinopse" => $sql_livro[7],
                "linkcompra" => $sql_livro[8]
            );
        };
        mysqli_free_result($result);
    };
}
?>