<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog PEssoal</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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

<body class="w3-light-grey w3-container">
    <!-- Cabeçalho do corpo da página Web -->
    <header class="w3-container w3-center w3-padding-32">
        <h1>Meu blog Pessoal</h1>
        <p> <?php echo $Mensagem_Boas_Vindas ?><span class="w3-tag"><?php echo AUTOR_BLOG ?></span></p>
    </header>
    <!-- Conteúdo da página Web -->
    <div class="w3-row">
        <div class="w3-col w3-container" style="width: 65%">
            <!-- Postagens -->
            <?php
            $contador = 0;
            while ($contador  <= 4) {
                $S = $Postagens_Principais[$contador]["nPostagem"];
                $T = $Postagens_Principais[$contador]["img"];
                $U = $Postagens_Principais[$contador]["tittle"];
                $V = $Postagens_Principais[$contador]["date"];
                $W = $Postagens_Principais[$contador]["description"];
                $X = $Postagens_Principais[$contador]["comments"];
               // $Z = $Postagens_Principais[$contador]["categ"]
            ?>
                <div class="w3-card-4 w3-margin w3-white">
                    <img src=<?php echo $Postagens_Principais[$contador]["img"] ?> alt="random-image" style="width: 100%">
                    <div class="w3-container">
                        <h3>
                            <p>0<?php echo $Postagens_Principais[$contador]["nPostagem"] ?> - Categoria</p>
                        </h3>
                        <h5><?php echo $Postagens_Principais[$contador]["tittle"] ?>, <span class="w3-opacity"><?php echo $Postagens_Principais[$contador]["date"] ?></span></h5>
                    </div>
                    <div class="w3-container">
                        <p>
                            <?php echo $Postagens_Principais[$contador]["description"] ?>
                        </p>
                        <div class="w3-row">
                            <div class="w3-col">

                            </div>
                            <div class="w3-col" style="width: 80%">
                                <p>
                                    <buton class="w3-button w3-padding-large w3-white w3-border">
                                        <b>Leia mais...</b>
                                    </buton>
                                </p>
                            </div>
                            <div class="w3-col w3-hide-small">
                                <p>
                                    <span class="w3-padding-large w3-right">
                                        <b>Comments</b>
                                        <span class="w3-tag"><?php echo $Postagens_Principais[$contador]["comments"] ?></span>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $contador++;
            }
            ?>

        </div>
        <div class="w3-col w3-container" style="width: 35%">
            <!-- Bloco de apresentação -->
            <div class="w3-card w3-margin">
                <img src=<?php echo $Bloco_Apres["img"] ?> alt="minha-lata-veia" style="width: 100%">
                <div class="w3-container w3-white">
                    <h4><b><?php echo $Bloco_Apres["nome"] ?></b></h4>
                    <p>
                        <?php echo $Bloco_Apres["descr"] ?>
                    </p>
                </div>
            </div>
            <hr>
            <!-- Bloco TOP 5 -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Postagens Mais Populares</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        $I = $Bloco_TOP5[$i]["img"];
                        $T = $Bloco_TOP5[$i]["titulo"];
                        $N = $Bloco_TOP5[$i]["nComent"]; ?>
                        <li class="w3-padding-16">
                            <img src=<?php echo $Bloco_TOP5[$i]["img"] ?> alt="default-image"
                                class="w3-left w3-margin-right" style="width: 50px">
                            <span class="w3-large"><?php echo $Bloco_TOP5[$i]["titulo"] ?></span>
                            <br>
                            <span>Comentários: <?php echo $Bloco_TOP5[$i]["nComent"] ?></span>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <hr>
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Categorias</h4>
                </div>
                <div class="w3-ccontainer w3-white">
                    <p>
                        <span class="w3-tag w3-black w3-margin-bottom">Todas</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Viagens</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Esportes</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Política</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Família</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé da página -->
    <footer class="w3-container w3-dark-grey w3-margin-top w3-cell-row">
        <div class="w3-container w3-cell w3-cell-top">
            <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">
                Anterior
            </button>
            <button class="w3-button w3-black w3-padding-large w3-margin-bottom">
                Próximo
            </button>
        </div>
        <div class="w3-container w3-cell w3-cell-bottom">
            <br><br><br>
            <p>Introdução ao Coding (we) by Luiz Fernando Corcini</p>
        </div>
        <div class="w3-container w3-cell w3-cell-top">
            <a href="#" class="w3-padding w3-xxlarge fa fa-facebook"></a>
            <a href="#" class="w3-padding w3-xxlarge fa fa-twitter"></a>
            <a href="#" class="w3-padding w3-xxlarge fa fa-instagram"></a>
        </div>

    </footer>


</body>

</html>