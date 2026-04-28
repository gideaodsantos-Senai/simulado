<?php
include 'config.php';

$tabela = $_GET['tabela'];
$id = $_GET['id'];
$operacao = $_GET['operacao'];

if ($operacao == 'incluir') {
    $conn->query("UPDATE $tabela SET quantidade = quantidade + 1 WHERE id$tabela = $id");
}
if ($operacao == 'retirar') {
    $conn->query("UPDATE $tabela SET quantidade = quantidade - 1 WHERE id$tabela = $id AND quantidade > 0");
}

header("Location: tabela.php");
