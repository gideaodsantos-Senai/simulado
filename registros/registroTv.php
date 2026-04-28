<?php
include '../config.php';
$tabela = 'smart_tvs';
if ($_POST) {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $minimo = $_POST['minimo'];
    if (empty($nome) || empty($quantidade)) {
        echo "<script>alert('Preencha os campos obrigatórios!');</script>";
    } else {
        $conexao->query("INSERT INTO $tabela (nome, quantidade, estoque_min, tensao, dimensoes, resolucao_tela, capacidade_arma, conectividade) 
        VALUES ('$nome', '$quantidade', '$minimo', '{$_POST['tensao']}', '{$_POST['dimensoes']}', '{$_POST['resolucao']}', '{$_POST['armazem']}', '{$_POST['conexao']}')");
        echo "<script>alert('Salvo com sucesso!'); window.location='registroProduto.php';</script>";
    }
}
?>
<link rel="stylesheet" href="../style.css">
<div class="container">
    <h1>Nova Smart TV</h1>
    <form method="POST">
        <input name="nome" placeholder="Nome" required><br>
        <input name="quantidade" type="number" placeholder="Quantidade" required><br>
        <input name="minimo" type="number" placeholder="Estoque Mínimo" required><br>
        <input name="tensao" placeholder="Tensão"><br>
        <input name="dimensoes" placeholder="Dimensões"><br>
        <input name="resolucao" placeholder="Resolução Tela"><br>
        <input name="armazem" placeholder="Armazenamento"><br>
        <input name="conexao" placeholder="Conectividade"><br>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="registroProduto.php">Voltar</a>
</div>