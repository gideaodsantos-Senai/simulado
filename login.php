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

    $sql = "SELECT * FROM usuario WHERE nome='$nome' AND email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login bem-sucedido!";
        echo "<script>location.href = 'index.php';</script>";
    } else {
        echo "Nome, email ou senha incorretos.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Produtos - Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
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