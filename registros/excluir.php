<?php
include '../config.php';
$tabela = $_GET['tabela'];
$id = $_GET['id'];
$id_coluna = "id$tabela";
if ($id) {
    $conexao->query("DELETE FROM $tabela WHERE $id_coluna = $id");
}
header("Location: registroProduto.php");
