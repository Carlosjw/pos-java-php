<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $departamento = $_POST['departamento'];

    $stmt = $conn->prepare("INSERT INTO Usuario (Nome, Departamento) VALUES (:nome, :departamento)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':departamento', $departamento);
    $stmt->execute();

    echo "Usuário cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Sistema de Atendimentos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_tecnico.php">Cadastro de Técnico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_usuario.php">Cadastro de Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_atendimento.php">Cadastro de Atendimento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_solucao.php">Cadastro de Solução</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consulta_atendimentos.php">Consulta de Atendimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consulta_solucoes.php">Consulta de Soluções</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" id="departamento" name="departamento" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>