<?php
session_start();
include 'config.php';
if ($_POST) {
    $usuario = $conexao->query("SELECT * FROM usuario WHERE email='{$_POST['email']}' AND senha='{$_POST['senha']}'")->fetch_assoc();
    if ($usuario) {
        $_SESSION['id'] = $usuario['idusuario'];
        $_SESSION['nome'] = $usuario['nome'];
        header("Location: index.php");
    } else {
        $erro = "Dados inválidos!";
    }
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Login</h1>
    <form method="POST">
        <input name="email" placeholder="Email" required><br>
        <input name="senha" type="password" placeholder="Senha" required><br>
        <button>Entrar</button>
    </form>
    <?= $erro ?? '' ?>
    <p><a href="registro.php">Criar conta</a></p>
</div>