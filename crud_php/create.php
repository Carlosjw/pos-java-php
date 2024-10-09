<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $profissao = $_POST['profissao'];

    $sql = "INSERT INTO usuarios (nome, email, idade, profissao) VALUES ('$nome', '$email', $idade, '$profissao')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
}
?>
