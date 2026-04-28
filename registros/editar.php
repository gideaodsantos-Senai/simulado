<?php 
include '../config.php';
$tabela = $_GET['tabela'];
$id = $_GET['id'];
$id_coluna = "id$tabela";
if ($_POST) {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $estoque_min = $_POST['estoque_min'];
    if (empty($nome) || empty($quantidade)) {
        echo "<script>alert('Preencha todos os campos!');</script>";
    } else {
        $conexao->query("UPDATE $tabela SET nome='$nome', quantidade='$quantidade', estoque_min='$estoque_min' WHERE $id_coluna = $id");
        header("Location: registroProduto.php");
    }
}
$produto = $conexao->query("SELECT * FROM $tabela WHERE $id_coluna = $id")->fetch_assoc();
?>
<link rel="stylesheet" href="../style.css">
<div class="container">
    <h1>Editar Produto</h1>
    <form method="POST">
        <label>Nome:</label><br>
        <input name="nome" value="<?= $produto['nome'] ?>" required><br><br>
        <label>Quantidade:</label><br>
        <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" required><br><br>
        <label>Estoque Mínimo:</label><br>
        <input type="number" name="estoque_min" value="<?= $produto['estoque_min'] ?>" required><br><br>
        <button type="submit">Salvar Alterações</button>
    </form>
    <br><a href="registroProduto.php">Voltar</a>
</div>
