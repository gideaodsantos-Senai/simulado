<?php
include '../config.php';
$t = 'smart_tvs';
if ($_POST) {
    $conn->query("INSERT INTO $t (nome, quantidade, estoque_min, tensao, dimensoes, resolucao_tela, capacidade_arma, conectividade) VALUES ('{$_POST['n']}','{$_POST['q']}','{$_POST['m']}','{$_POST['t']}','{$_POST['d']}','{$_POST['r']}','{$_POST['a']}','{$_POST['c']}')");
    echo "Salvo!";
}
?>
<form method="POST">
    <input name="n" placeholder="Nome"><br>
    <input name="q" placeholder="Qtd"><br>
    <input name="m" placeholder="Min"><br>
    <input name="t" placeholder="Tensao"><br>
    <input name="d" placeholder="Dimensao"><br>
    <input name="r" placeholder="Resolucao"><br>
    <input name="a" placeholder="Armaz"><br>
    <input name="c" placeholder="Conex"><br>
    <button>Salvar TV</button>
</form>
<a href="registroProduto.php">Voltar</a>