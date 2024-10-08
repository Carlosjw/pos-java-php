<?php
include 'connect.php';

// Inserir novo usuário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário '" . $nome . "' criado com sucesso!";
    } else {
        echo "Erro ao criar usuário: " . $conn->error;
    };
}

// Listar usuários
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Cadastro de Usuários</h2>
    <form method="post" id="main-form">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Cadastrar</button>

    </form>

    <h2>Lista de Usuários</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td><a href='edit.php?id=" . $row["id"] . "'>Editar</a> | <a href='delete.php?id="
                    . $row["id"] . "'>Excluir</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum usuário encontrado.</td></tr>";
        }
        ?>
    </table>
</body>

</html>