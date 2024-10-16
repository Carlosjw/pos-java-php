<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroAtendimento = $_POST['numeroAtendimento'];
    $dataInicio = $_POST['dataInicio'];
    $status = $_POST['status'];
    $problemaDetectado = $_POST['problemaDetectado'];
    $solucaoAplicada = $_POST['solucaoAplicada'];
    $dataTermino = $_POST['dataTermino'];
    $tecnicoResponsavel = $_POST['tecnicoResponsavel'];

    $stmt = $conn->prepare("INSERT INTO Solucao (NumeroAtendimento, DataInicio, Status, ProblemaDetectado, SolucaoAplicada, DataTermino, TecnicoResponsavel) VALUES (:numeroAtendimento, :dataInicio, :status, :problemaDetectado, :solucaoAplicada, :dataTermino, :tecnicoResponsavel)");
    $stmt->bindParam(':numeroAtendimento', $numeroAtendimento);
    $stmt->bindParam(':dataInicio', $dataInicio);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':problemaDetectado', $problemaDetectado);
    $stmt->bindParam(':solucaoAplicada', $solucaoAplicada);
    $stmt->bindParam(':dataTermino', $dataTermino);
    $stmt->bindParam(':tecnicoResponsavel', $tecnicoResponsavel);
    $stmt->execute();

    echo "Solução cadastrada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Solução</title>
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
        <h2>Cadastro de Solução</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="numeroAtendimento" class="form-label">Número do Atendimento</label>
                <select class="form-control" id="numeroAtendimento" name="numeroAtendimento" required>
                    <?php
                    $stmt = $conn->query("SELECT NumeroAtendimento FROM Atendimento");
                    while ($row = $stmt->fetch()) {
                        echo "<option value='" . $row['NumeroAtendimento'] . "'>" . $row['NumeroAtendimento'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="dataInicio" class="form-label">Data de Início</label>
                <input type="date" class="form-control" id="dataInicio" name="dataInicio" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Em Atendimento">Em Atendimento</option>
                    <option value="Pausado">Pausado</option>
                    <option value="Finalizado">Finalizado</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="problemaDetectado" class="form-label">Problema Detectado</label>
                <textarea class="form-control" id="problemaDetectado" name="problemaDetectado" required></textarea>
            </div>
            <div class="mb-3">
                <label for="solucaoAplicada" class="form-label">Solução Aplicada</label>
                <textarea class="form-control" id="solucaoAplicada" name="solucaoAplicada" required></textarea>
            </div>
            <div class="mb-3">
                <label for="dataTermino" class="form-label">Data de Término</label>
                <input type="date" class="form-control" id="dataTermino" name="dataTermino">
            </div>
            <div class="mb-3">
                <label for="tecnicoResponsavel" class="form-label">Técnico Responsável</label>
                <select class="form-control" id="tecnicoResponsavel" name="tecnicoResponsavel" required>
                    <?php
                    $stmt = $conn->query("SELECT Identificador, Nome FROM Tecnico");
                    while ($row = $stmt->fetch()) {
                        echo "<option value='" . $row['Identificador'] . "'>" . $row['Nome'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>