<?php
include 'config.php';
if ($_POST) {
    $conexao->query("INSERT INTO usuario (nome, email, senha) VALUES ('{$_POST['nome']}', '{$_POST['email']}', '{$_POST['senha']}')");
    header("Location: login.php");
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Cadastro</h1>
    <form method="POST">
        <input name="nome" placeholder="Nome" required><br>
        <input name="email" placeholder="Email" required><br>
        <input name="senha" type="password" placeholder="Senha" required><br>
        <button>Cadastrar</button>
    </form>
    <a href="login.php">Voltar</a>
</div>