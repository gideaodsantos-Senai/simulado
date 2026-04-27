<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Olá, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</h1>
    <p>Bem-vindo ao sistema.</p>

    <ul>
        <li><a href="registros/registroProduto.php">Cadastrar Produto</a></li>
        <li><a href="tabela.php">Gestão de Estoque</a></li>
        <li><a href="logout.php">Sair</a></li>
    </ul>
    </div>
</body>
</html>