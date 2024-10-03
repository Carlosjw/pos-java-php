<?php
// CONFIGURANDO CONEXÃO COM SERVIDOR DE BANCO DE DADOS
header("Content-Type: text/html; charset=utf-8", true);
define("USUARIO", "root");
define("SENHA", "");
define("DB", "blog_pessoal");
define("SERVER", "127.0.0.1");
$conexao = mysqli_connect(SERVER, USUARIO, SENHA, DB);

/* vVERIFICANDO STAUTS DA CONEXÃO*/
if (mysqli_connect_errno()) {
    echo "Falha ao conectar com o MySQL. Motivo: " . mysqli_connect_error();
} else {
    echo "Status <b>OK</b>. <br> Banco de Dados " . DB . " <b>conectado</b>!";

    $sql = "select * FROM t_apres";
    if ($result = mysqli_query($conexao, $sql)) {
        if ($registro = mysqli_fetch_row($result)) {
            // Sobre o autor
            $Bloco_Apres = array(
                "img" => $registro[2],
                "nome" => $registro[0],
                "descr" => $registro[1]
            );
        }
        // libera conexão da variável
        mysqli_free_result($result);
    }

    $NPostagens = 0;
    $Postagens_Principais = array(); // Inicializa o array vazio para armazenar as postagens

    $sqlPost = "SELECT * FROM t_post";

    if ($postResult = mysqli_query($conexao, $sqlPost)) {
        while ($postRegistro = mysqli_fetch_row($postResult)) {
            // Incrementa o contador de postagens
            $NPostagens  += 1;

            // Armazena cada postagem no array, com o índice correspondente ao número da postagem
            $Postagens_Principais[] = array(
                "img" => $postRegistro[2],         // Coluna com o link da imagem
                "nPostagem" => $NPostagens,        // Número da postagem (incrementado)
                "tittle" => $postRegistro[1],      // Coluna com o título
                "date" => $postRegistro[3],        // Coluna com a data
                "description" => $postRegistro[4], // Coluna com a descrição
                "comments" => $postRegistro[5],
                //"categ " => $postRegistro[6]  // Coluna com os comentários
            );
        }
        mysqli_free_result($postResult);
    }

    /*
    // Exemplo de como acessar e exibir as postagens
    foreach ($Postagens_Principais as $postagem) {
        echo "<img src='" . $postagem['img'] . "' alt='Imagem da Postagem'><br>";
        echo "Postagem #" . $postagem['nPostagem'] . ": " . $postagem['tittle'] . "<br>";
        echo "Data: " . $postagem['date'] . "<br>";
        echo "Descrição: " . $postagem['description'] . "<br>";
        echo "Comentários: " . $postagem['comments'] . "<br>";        
        echo "Categoria: " . $postagem['categ ']."<br><br>;
    }  
    */

    $Bloco_TOP5 = array(
        1 => array(
            "img" => "https://picsum.photos/200?random=6",
            "titulo" => "Dez motivos para aprender HTML5 + W3.CSS",
            "nComent" => 142
        ),
        2 => array(
            "img" => "https://picsum.photos/200?random=5",
            "titulo" => "Experiência em Gravidade 0",
            "nComent" => 10
        ),
        3 => array(
            "img" => "https://picsum.photos/200?random=4",
            "titulo" => "Como morar sozinho",
            "nComent" => 7
        ),
        4 => array(
            "img" => "https://picsum.photos/200?random=3",
            "titulo" => "Melhores músicas anos 90",
            "nComent" => 7
        ),
        5 => array(
            "img" => "https://picsum.photos/200?random=2",
            "titulo" => "O que fazer num sábado chuvoso",
            "nComent" => 5
        ),
    );
};

$Blog_Titulo = "Meu Blog Pessoal";
$Mensagem_Boas_Vindas = "Seja bem vindo! Criado por ";
define("AUTOR_BLOG", 'Carlos Lima');
$NPostagens = 0;

mysqli_close($conexao);
?>