<?php
include 'db_connection.php';

$filtroUsuario = isset($_GET['filtroUsuario']) ? $_GET['filtroUsuario'] : '';
$filtroEquipamento = isset($_GET['filtroEquipamento']) ? $_GET['filtroEquipamento'] : '';
$filtroDataInicio = isset($_GET['filtroDataInicio']) ? $_GET['filtroDataInicio'] : '';
$filtroDataFim = isset($_GET['filtroDataFim']) ? $_GET['filtroDataFim'] : '';

$sql = "SELECT a.NumeroAtendimento, u.Nome AS NomeUsuario, a.TipoEquipamento, a.PatrimonioEquipamento, a.ProblemaRelatado, a.DataEntrada, s.Status, s.ProblemaDetectado, s.SolucaoAplicada, s.DataTermino, t.Nome AS NomeTecnico
        FROM Atendimento a
        JOIN Usuario u ON a.NomeUsuario = u.Identificador
        LEFT JOIN Solucao s ON a.NumeroAtendimento = s.NumeroAtendimento
        LEFT JOIN Tecnico t ON s.TecnicoResponsavel = t.Identificador
        WHERE 1=1";

if (!empty($filtroUsuario)) {
    $sql .= " AND u.Identificador = :filtroUsuario";
}

if (!empty($filtroEquipamento)) {
    $sql .= " AND a.TipoEquipamento LIKE :filtroEquipamento";
}

if (!empty($filtroDataInicio)) {
    $sql .= " AND a.DataEntrada >= :filtroDataInicio";
}

if (!empty($filtroDataFim)) {
    $sql .= " AND a.DataEntrada <= :filtroDataFim";
}

$stmt = $conn->prepare($sql);

if (!empty($filtroUsuario)) {
    $stmt->bindParam(':filtroUsuario', $filtroUsuario);
}

if (!empty($filtroEquipamento)) {
    $filtroEquipamento = '%' . $filtroEquipamento . '%';
    $stmt->bindParam(':filtroEquipamento', $filtroEquipamento);
}

if (!empty($filtroDataInicio)) {
    $stmt->bindParam(':filtroDataInicio', $filtroDataInicio);
}

if (!empty($filtroDataFim)) {
    $stmt->bindParam(':filtroDataFim', $filtroDataFim);
}

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Atendimentos</title>
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
        <h2>Consulta de Atendimentos</h2>
        <form method="GET" action="">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="filtroUsuario" class="form-label">Usuário</label>
                    <select class="form-control" id="filtroUsuario" name="filtroUsuario">
                        <option value="">Todos</option>
                        <?php
                        $stmt = $conn->query("SELECT Identificador, Nome FROM Usuario");
                        while ($row = $stmt->fetch()) {
                            echo "<option value='" . $row['Identificador'] . "'>" . $row['Nome'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="filtroEquipamento" class="form-label">Equipamento</label>
                    <input type="text" class="form-control" id="filtroEquipamento" name="filtroEquipamento">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="filtroDataInicio" class="form-label">Data Início</label>
                    <input type="date" class="form-control" id="filtroDataInicio" name="filtroDataInicio">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="filtroDataFim" class="form-label">Data Fim</label>
                    <input type="date" class="form-control" id="filtroDataFim" name="filtroDataFim">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>

        <div class="table-responsive mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Número do Atendimento</th>
                        <th>Usuário</th>
                        <th>Equipamento</th>
                        <th>Patrimônio</th>
                        <th>Problema Relatado</th>
                        <th>Data de Entrada</th>
                        <th>Status</th>
                        <th>Problema Detectado</th>
                        <th>Solução Aplicada</th>
                        <th>Data de Término</th>
                        <th>Técnico Responsável</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td><?php echo $row['NumeroAtendimento']; ?></td>
                            <td><?php echo $row['NomeUsuario']; ?></td>
                            <td><?php echo $row['TipoEquipamento']; ?></td>
                            <td><?php echo $row['PatrimonioEquipamento']; ?></td>
                            <td><?php echo $row['ProblemaRelatado']; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($row['DataEntrada'])); ?></td>
                            <td><?php echo $row['Status']; ?></td>
                            <td><?php echo $row['ProblemaDetectado']; ?></td>
                            <td><?php echo $row['SolucaoAplicada']; ?></td>
                            <td><?php echo $row['DataTermino'] ? date('d/m/Y', strtotime($row['DataTermino'])) : ''; ?></td>
                            <td><?php echo $row['NomeTecnico']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="list-group d-md-none">
            <?php foreach ($result as $row): ?>
                <div class="list-group-item">
                    <h5 class="mb-1">Número do Atendimento: <?php echo $row['NumeroAtendimento']; ?></h5>
                    <p class="mb-1">Usuário: <?php echo $row['NomeUsuario']; ?></p>
                    <p class="mb-1">Equipamento: <?php echo $row['TipoEquipamento']; ?></p>
                    <p class="mb-1">Patrimônio: <?php echo $row['PatrimonioEquipamento']; ?></p>
                    <p class="mb-1">Problema Relatado: <?php echo $row['ProblemaRelatado']; ?></p>
                    <p class="mb-1">Data de Entrada: <?php echo date('d/m/Y', strtotime($row['DataEntrada'])); ?></p>
                    <p class="mb-1">Status: <?php echo $row['Status']; ?></p>
                    <p class="mb-1">Problema Detectado: <?php echo $row['ProblemaDetectado']; ?></p>
                    <p class="mb-1">Solução Aplicada: <?php echo $row['SolucaoAplicada']; ?></p>
                    <p class="mb-1">Data de Término: <?php echo $row['DataTermino'] ? date('d/m/Y', strtotime($row['DataTermino'])) : ''; ?></p>
                    <p class="mb-1">Técnico Responsável: <?php echo $row['NomeTecnico']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>