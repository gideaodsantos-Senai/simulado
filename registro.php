<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $conn->query($sql);
    echo "Registro bem-sucedido!";
} else {
    echo "Erro ao registrar usuário.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Produtos - Registro de Usuario</title>
</head>

<body>
    <h1>Registro de Usuarios</h1>
    <form action="registro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Insira seu Nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Insira seu Email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Insira sua Senha" required>
        <br>
        <input type="submit">
    </form>
</body>

</html>