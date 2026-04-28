<?php 
include 'config.php'; 
$tabelas = ['notebooks' => 'Notebooks', 'smart_tvs' => 'Smart TVs', 'smartphones' => 'Smartphones'];
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Gestão de Estoque</h1>
    <?php foreach ($tabelas as $tabela => $nome): ?>
        <h2><?= $nome ?></h2>
        <table border="1">
            <tr><th>Nome<th>Qtd<th>Mínimo<th>Status<th>Ação</th></tr>
            <?php 
            $resultado = $conexao->query("SELECT * FROM $tabela ORDER BY nome ASC");
            while ($linha = $resultado->fetch_assoc()): 
                $status = $linha['quantidade'] < $linha['estoque_min'] ? 'BAIXO' : 'OK';
            ?>
                <tr>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['quantidade'] ?></td>
                    <td><?= $linha['estoque_min'] ?></td>
                    <td><?= $status ?></td>
                    <td>
                        <a href="movimentar.php?tabela=<?= $tabela ?>&id=<?= $linha["id$tabela"] ?>">Movimentar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endforeach; ?>
    <button onclick="location.href='index.php'">Voltar</button>
</div>