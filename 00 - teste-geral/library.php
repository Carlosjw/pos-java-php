<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100dvw;
        height: 100dwh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .main-container {
        width: 768px;
        height: 750px;
        overflow: auto;
    }

    .main-list {
        list-style: none;
        display: flex;
        flex-direction: column;
    }

    .sinopse-title {
        margin-left: 20px;
    }

    .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #fff;
    }

    .collapsible {
        color: #000;
        font-weight: bold;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        background-color: lightgrey
    }

    .active,
    .collapsible:hover {
        background-color: grey;

    }

    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: gray;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: silver;
    }

    footer {
        bottom: 0;
    }
</style>
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
                "year" => $sql_livro[7],
                "sinopse" => $sql_livro[6],
                "linkcompra" => $sql_livro[8]
            );
        };
        mysqli_free_result($result);
    };
}
?>

<script src="script.js" defer></script>

<body>
    <div class="w3-container w3-padding w3-dark-grey w3-text-white" style="width: 768px; margin-top: 20px;">
        <h4>LIVROS PARA A VIDA TODA</h4>
    </div>
    <div class="w3-margin main-container">

        <ul class="main-list">
            <?php

            for ($full_lenght = 0; $full_lenght < count($Biblioteca_SQL); $full_lenght++) {
                $A = $Biblioteca_SQL[$full_lenght]["img"];
                $B = $Biblioteca_SQL[$full_lenght]["title"];
                $C = $Biblioteca_SQL[$full_lenght]["author"];
                $D = $Biblioteca_SQL[$full_lenght]["genre"];
                $E = $Biblioteca_SQL[$full_lenght]["pages"];
                $F = $Biblioteca_SQL[$full_lenght]["year"];
                $G = $Biblioteca_SQL[$full_lenght]["sinopse"];
                $H = $Biblioteca_SQL[$full_lenght]["linkcompra"];
            ?>
                <li class="w3-light-grey w3-card" style="margin-bottom: 10px">
                    <a href=<?php echo $H ?> target="_blank">
                        <img src=<?php echo $A ?> alt="default-image" class="w3-left w3-margin-right" style="width: 120px; margin-bottom: 10px">
                    </a>
                    <span class="w3-xlarge"><b><?php echo $B ?></b></span>
                    <br>
                    <span><b>Autor:</b> <?php echo $C ?></span><br>
                    <span><b>Gênero:</b> <?php echo $D ?></span><br>
                    <span><b>Páginas:</b> <?php echo $E ?></span><br>
                    <span><b>Ano:</b> <?php echo $F ?></span><br><br>
                    <button type="button" class="collapsible">Sinopse:</button>

                    <div class="content w3-card">
                        <p class="w3-padding" style="text-align:justify; text-indent:2em">
                            <?php echo $G ?>
                        </p>
                    </div>
                </li>

            <?php
            }
            ?>
        </ul>
    </div>
    <footer>
        <p><?php echo $message ?></p>
    </footer>

</body>

</html>