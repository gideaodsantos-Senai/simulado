<?php
session_start();
if (!isset($_SESSION['id'])) header("Location: login.php");
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Olá, <?= $_SESSION['nome'] ?></h1>
    <ul>
        <li><a href="registros/registroProduto.php">Cadastrar Produto</a></li>
        <li><a href="tabela.php">Gestão de Estoque</a></li>
        <li><a href="buscar.php">Buscar Produto</a></li>
        <li><a href="logout.php">Sair</a></li>
    </ul>
</div>