<!DOCTYPE html>
<html lang="pt-BR">
<?php
// CONFIGURANDO CONEXÃO COM SERVIDOR DE BANCO DE DADOS
header("Content-Type: text/html; charset=ISO-8859-1", true);
define("USUARIO", "root");
define("SENHA", "PhpAdmin@pass2024");
define("DB", "blog_pessoal");
define("SERVER", "localhost");

$Blog_Titulo = "Meu Blog Pessoal";
$Mensagem_Boas_Vindas = "Seja bem vindo! Criado por ";
define("AUTOR_BLOG", 'Carlos Lima');
$NPostagens = 0;
$FirstPostTitle = "O mundo virtual está cada vez mais real!";
$FirstPostDate = "Agosto 8, 2018";
$FirstPost = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero minima laboriosam possimus at earum exercitationem nihil inventore officiis, obcaecati veritatis pariatur nam magnam esse accusantium ea. Unde iure velit laudantium?";
$SecondPostTitle = "O mundo virtual está cada vez mais real!";
$SecondPostDate = "Agosto 30, 2018";
$SecondPost = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero minima laboriosam possimus at earum exercitationem nihil inventore officiis, obcaecati veritatis pariatur nam magnam esse accusantium ea. Unde iure velit laudantium?";
$ThirtPostTitle = "O mundo virtual está cada vez mais real!";
$ThirtPostDate = "Setembro 11, 2018";
$ThirtPost = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero minima laboriosam possimus at earum exercitationem nihil inventore officiis, obcaecati veritatis pariatur nam magnam esse accusantium ea. Unde iure velit laudantium?";
$AboutAuthor = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates numquam dolore voluptate commodi deserunt odio ut adipisci vero vitae. Doloremque maxime asperiores cupiditate impedit quasi officia. Fuga nihil placeat similique.";

// POSTAGENS PRINCIPAIS
$Postagens_Principais = array(
    1 => array(
        "nPostagem" => $NPostagens += 1,
        "img" => "https://picsum.photos/200?random=3",
        "tittle" => $FirstPostTitle,
        "date" => $FirstPostDate,
        "description" => $FirstPost,
        "comments" => 120
    ),
    2 => array(
        "nPostagem" => $NPostagens += 1,
        "img" => "https://picsum.photos/200?random=1",
        "tittle" => $SecondPostTitle,
        "date" => $SecondPostDate,
        "description" => $SecondPost,
        "comments" => 38
    ),
    3 => array(
        "nPostagem" => $NPostagens += 1,
        "img" => "https://picsum.photos/200?random=4",
        "tittle" => $ThirtPostTitle,
        "date" => $ThirtPostDate,
        "description" => $ThirtPost,
        "comments" => 56
    ),
);
// Sobre o autor
$Bloco_Apres = array(
    "img" => "./20240728_172652.jpg",
    "nome" => AUTOR_BLOG,
    "descr" => $AboutAuthor
);

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
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog PEssoal</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<!-- COpor da página Web -->

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
            $contador = 1;
            while ($contador  <= 3) {
                $S = $Postagens_Principais[$contador]["nPostagem"];
                $T = $Postagens_Principais[$contador]["img"];
                $U = $Postagens_Principais[$contador]["tittle"];
                $V = $Postagens_Principais[$contador]["date"];
                $W = $Postagens_Principais[$contador]["description"];
                $X = $Postagens_Principais[$contador]["comments"]
            ?>
                <div class="w3-card-4 w3-margin w3-white">
                    <img src=<?php echo $Postagens_Principais[$contador]["img"] ?> alt="random-image" style="width: 100%">
                    <div class="w3-container">
                        <h3>
                            <p>0<?php echo $Postagens_Principais[$contador]["nPostagem"] ?> - GAMES</p>
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