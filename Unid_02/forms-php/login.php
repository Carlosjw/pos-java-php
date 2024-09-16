<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_POST['user-name']) and isset($_POST['user-pass'])) {
    $usr = $_POST['user-name'];
    $pwd = $_POST['user-pass'];

    if ($usr == "admin" && $pwd == 123) {
        echo "Usuário e senha corretos. Você será redirecionado para a área administrativa do blog.";
    } else {
        echo "Usuário e/ou senha incorretos.";
    }
};

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="w3-container w3-center w3-light-grey">
        <h1>Formulário de Acesso</h1>
    </header>
    <form action="" class="w3-container" method="post">
        <section class="w3-container w3-section">
            <label for="user-name"><b>Usuário</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="user-name" id="user-name">
            <label for="user-pass"><b>Senha</b></label>
            <input class="w3-input w3-border" type="password" name="user-pass" id="user-pass">
            <button class="w3-button w3-green w3-section w3-block" type="submit">Entrar</button>
            <input class="w3-check" type="checkbox" name="checked-input" id="checked-input"> Lembrar de mim.

        </section>
    </form>
    <footer class="w3-container w3-border-top w3-padding-16 w3-grey">
        <button type="button" class="w3-button w3-red">Cancelar</button>
        <span class="w3-right w3-paddin w3-hide-small">Esqueceu a <a href="#">senha?</a></span>
    </footer>
</body>

</html>