<?php
// Conexão com o banco de dados (ajuste as informações)
include 'connect.php'; // Supondo que você tenha um arquivo connect.php para conectar ao banco

// Recebe o ID do registro a ser excluído
$id = $_GET['id'];

// Consulta SQL para excluir o registro
$sql = "DELETE FROM sua_tabela WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir registro: " . $conn->error;
}

// Redireciona para a página principal após a exclusão
header("Location: index.php");
exit();
?>