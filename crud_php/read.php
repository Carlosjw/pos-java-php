<?php
include 'config.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Nome</th><th>Email</th><th>Idade</th><th>Profissão</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nome"]. "</td><td>" . $row["email"]. "</td><td>" . $row["idade"]. "</td><td>" . $row["profissao"]. "</td>";
        echo "<td><button onclick='editUser(" . $row["id"] . ")'>Editar</button> <button onclick='deleteUser(" . $row["id"] . ", \"" . $row["nome"] . "\")'>Excluir</button></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
