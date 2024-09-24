<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
// CONFIGURANDO CONEXÃO COM SERVIDOR DE BANCO DE DADOS
header("Content-Type: text/html; charset=utf-8", true);
define("USUARIO", "root");
define("SENHA", "");
define("DB", "teste_php_db");
define("SERVER", "127.0.0.1");
$conexao = mysqli_connect(SERVER, USUARIO, SENHA, DB);

$Biblioteca_SQL = array();

//VALIDANDO CONEXÃO
if (mysqli_connect_errno()) {
    echo "<b>Falha</b> ao conectar no banco de dados " . "<b>" . DB . "</b>" . "Motivo: " . "<b><br>" . mysqli_connect_error() . "</b>";
} else {
    echo "<b>Sucesso</b> ao conectar no banco de dados " . "<b>" . DB . "</b>!<br><br>";

    $sql_query = "SELECT * FROM livro";
    if ($result = mysqli_query($conexao, $sql_query)) {
        while ($sql_livro = mysqli_fetch_row($result)) {
            $Biblioteca_SQL[] = array(
                "img" => $sql_livro[1],
                "title" => $sql_livro[2],
                "author" => $sql_livro[3],
                "genre" => $sql_livro[4],
                "pages" => $sql_livro[5],
                "year" => $sql_livro[6]
            );
        };
        mysqli_free_result($result);
    };
}
?>

<body>
    <div class="w3-card w3-margin" style="width: 50%">
        <div class="w3-container w3-padding">
            <h4>LIVROS PARA A VIDA TODA</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
            <?php

            for ($full_lenght = 0; $full_lenght < count($Biblioteca_SQL); $full_lenght++) {
                $A = $Biblioteca_SQL[$full_lenght]["img"];
                $B = $Biblioteca_SQL[$full_lenght]["title"];
                $C = $Biblioteca_SQL[$full_lenght]["author"];
                $D = $Biblioteca_SQL[$full_lenght]["genre"];
                $E = $Biblioteca_SQL[$full_lenght]["pages"];
                $F = $Biblioteca_SQL[$full_lenght]["year"];
            ?>
                <li class="w3-padding-16">
                    <img src=<?php echo $A ?> alt="default-image" class="w3-left w3-margin-right" style="width: 100px">
                    <span class="w3-large"><?php echo $B ?></span>
                    <br>
                    <span>Autor: <?php echo $C ?></span><br>
                    <span>Gênero: <?php echo $D ?></span><br>
                    <span>Páginas: <?php echo $E ?></span><br>
                    <span>Ano: <?php echo $F ?></span><br><br>

                </li>
            <?php
            }
            ?>
        </ul>
    </div>

</body>

</html>