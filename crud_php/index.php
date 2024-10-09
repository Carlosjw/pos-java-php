<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerenciamento de Usuários</h1>
    <form id="userForm" method="POST" action="create.php">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="idade" placeholder="Idade" required>
        <input type="text" name="profissao" placeholder="Profissão" required>
        <button type="submit">Adicionar Usuário</button>
    </form>
    <div id="userList">
        <?php include 'read.php'; ?>
    </div>

    <!-- Modal de Edição -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close">×</span>
            <form id="editForm" method="POST" action="update.php">
                <input type="hidden" name="id" id="editId">
                <input type="text" name="nome" id="editNome" required>
                <input type="email" name="email" id="editEmail" required>
                <input type="number" name="idade" id="editIdade" required>
                <input type="text" name="profissao" id="editProfissao" required>
                <button type="submit">Salvar Alterações</button>
            </form>
        </div>
    </div>

    <!-- Modal de Exclusão -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close">×</span>
            <p id="deleteMessage"></p>
            <button id="confirmDelete">Sim</button>
            <button id="cancelDelete">Cancelar</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
