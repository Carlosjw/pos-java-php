<!DOCTYPE html>
<html lang="pt-BR">
<?php
include("script.php");
?>

<head>
    <?php
    include("head.php");
    ?>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="w3-row">
        <div class="w3-col w3-container" style="width: 65%">
            <?php
            include("postagens.php");
            ?>
        </div>
        <div class="w3-col w3-container" style="width: 35%">
            <!--APRESENTAÇÃO-->
            <?php
            include("apresentacao.php");
            ?>
            <hr>
            <!--TOP 5-->
            <?php
            include("top_05.php");
            ?>
            <hr>
            <!--CATEGORAIS-->
            <?php
            include("categorias.php");
            ?>
        </div>
    </div>
    <!--RODAPÉ-->
    <?php
    include("footer.php")
    ?>
</body>

</html>