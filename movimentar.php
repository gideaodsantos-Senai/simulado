<?php 
include 'config.php';
$tabela = $_GET['tabela'];
$id = $_GET['id'];
$id_coluna = "id$tabela";
$produto = $conexao->query("SELECT * FROM $tabela WHERE $id_coluna = $id")->fetch_assoc();
if ($_POST) {
    $tipo = $_POST['tipo'];
    $data = $_POST['data'];
    $ajuste = ($tipo == 'entrada') ? "+ 1" : "- 1";
    $conexao->query("UPDATE $tabela SET quantidade = quantidade $ajuste WHERE $id_coluna = $id");
    $atualizado = $conexao->query("SELECT * FROM $tabela WHERE $id_coluna = $id")->fetch_assoc();
    if ($tipo == 'saida' && $atualizado['quantidade'] < $atualizado['estoque_min']) {
        echo "<script>alert('ALERTA: Estoque abaixo do mínimo!'); window.location='tabela.php';</script>";
    } else {
        header("Location: tabela.php");
    }
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Movimentação: <?= $produto['nome'] ?></h1>
    <p>Estoque Atual: <?= $produto['quantidade'] ?></p>
    <form method="POST">
        <label>Tipo de Movimentação:</label><br>
        <select name="tipo" required>
            <option value="entrada">Entrada (+1)</option>
            <option value="saida">Saída (-1)</option>
        </select><br><br>
        <label>Data da Movimentação:</label><br>
        <input type="date" name="data" required><br><br>
        <button type="submit">Confirmar</button>
    </form>
    <br><a href="tabela.php">Voltar</a>
</div>
