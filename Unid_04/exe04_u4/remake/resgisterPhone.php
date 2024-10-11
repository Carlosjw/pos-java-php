<?php
include("conection.php");

// Verificar conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imageUrl = $_POST['imageUrl'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $memoRam = $_POST['memoRam'];
    $armazenamento = $_POST['armazenamento'];

    // Usar prepared statements para maior segurança
    $stmt = $conexao->prepare("INSERT INTO celular (marca, modelo, memoRam, armazenamento, imageUrl) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $marca, $modelo, $memoRam, $armazenamento, $imageUrl);

    if ($stmt->execute() === TRUE) {
        echo "<p>Celular " . $marca . " " . $modelo . " cadastrado com sucesso!</p>";
        echo "<script>setTimeout(function(){ window.location.href = 'principal_blog_u4.php'; }, 3000);</script>"; // Redireciona após 3 segundos
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
}
?>
