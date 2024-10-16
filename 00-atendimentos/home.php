<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <!-- Conteúdo da Home -->
    <div class="container home-content">
        <h1>Bem-vindo ao Sistema de Atendimentos</h1>
        <p>Escolha uma das opções no menu acima para começar.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>