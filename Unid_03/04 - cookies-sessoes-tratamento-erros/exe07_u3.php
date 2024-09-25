<?php
header("Content-Type: text/html; charset=utf-8", true);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões em PHP</title>
</head>

<body>
    <?php
    // Apresenta as variáveis de sessão gravdas no exercício anterior
    echo "Usuário: " . $_SESSION["u"] . "<br>";
    echo "E-mail: " . $_SESSION["e"] . ".";

    ?>
</body>

</html>