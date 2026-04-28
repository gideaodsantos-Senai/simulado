<?php
include 'config.php';
if ($_POST) {
    $conn->query("INSERT INTO usuario (nome, email, senha) VALUES ('{$_POST['n']}', '{$_POST['e']}', '{$_POST['s']}')");
    header("Location: login.php");
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Cadastro</h1>
    <form method="POST">
        <input name="n" placeholder="Nome" required><br>
        <input name="e" placeholder="Email" required><br>
        <input name="s" type="password" placeholder="Senha" required><br>
        <button>Cadastrar</button>
    </form>
    <a href="login.php">Voltar</a>
</div>