<?php include 'config.php'; ?>
<link rel="stylesheet" href="style.css">
<?php
foreach (['notebooks', 'smart_tvs', 'smartphones'] as $tabela) {
    echo "<h2>$tabela</h2>
    <table border=1>
    <tr>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Estoque Mínimo</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>";
    $resultado = $conexao->query("SELECT * FROM $tabela");
    while ($linha = $resultado->fetch_assoc()) {
        $status = $linha['quantidade'] < $linha['estoque_min'] ? 'BAIXO' : 'OK';
        echo "<tr>
            <td>$linha[nome]</td>
            <td>$linha[quantidade]</td>
            <td>$linha[estoque_min]</td>
            <td>$status</td>
            <td>
                <a href='atualizar_estoque.php?tabela=$tabela&id={$linha["id$tabela"]}&operacao=incluir'>+</a>
                <a href='atualizar_estoque.php?tabela=$tabela&id={$linha["id$tabela"]}&operacao=retirar'>-</a>
            </td>
            </tr>";
    }
    echo "</table>";
}
?>
<br><a href="index.php">Voltar</a>