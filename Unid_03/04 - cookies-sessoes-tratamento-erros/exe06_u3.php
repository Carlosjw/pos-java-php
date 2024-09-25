<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
header("Content-Type: text/html; charset=utf-8", true);

// inicia a sessão
session_start();

// Set session variables
if (isset($_POST['usuario']) && isset($_POST['email'])) {
    $usr = $_POST['usuario'];
    $email = $_POST['email'];
    $_SESSION["u"] = $usr;
    $_SESSION["e"] = $email;
    echo "As variáveis de sessão foram gravadas!";
    echo $usr;
    echo $email;
}
?>

<body>
    <form action="#" method="post">
        <label for="userName">Usuário:</label>
        <input type="text" name="userName" id="userName">
        <label for="userEmail">Email:</label>
        <input type="text" name="userEmail" id="userEmail">
        <input type="submit">
    </form>
</body>

</html>