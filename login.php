<?php
session_start();
include 'config.php';
if ($_POST) {
    $u = $conn->query("SELECT * FROM usuario WHERE email='{$_POST['e']}' AND senha='{$_POST['s']}'")->fetch_assoc();
    if ($u) {
        $_SESSION['id'] = $u['idusuario'];
        $_SESSION['nome'] = $u['nome'];
        header("Location: index.php");
    } else $err = "Dados inválidos!";
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Login</h1>
    <form method="POST">
        <input name="e" placeholder="Email" required><br>
        <input name="s" type="password" placeholder="Senha" required><br>
        <button>Entrar</button>
    </form>
    <?= $err ?? '' ?>
    <p><a href="registro.php">Criar conta</a></p>
</div>