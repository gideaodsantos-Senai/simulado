<?php
include 'config.php';
$tabelas = ['notebooks' => 'Notebooks', 'smart_tvs' => 'Smart TVs', 'smartphones' => 'Smartphones'];
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Controle de Estoque</h1>
    <?php foreach ($tabelas as $tabela => $nome): ?>
        <h2><?= $nome ?></h2>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Qtd</th>
                <th>Min</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php
            $res = $conn->query("SELECT * FROM $tabela");
            while ($r = $res->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $r['nome'] ?></td>
                    <td><?= $r['quantidade'] ?></td>
                    <td><?= $r['estoque_min'] ?></td>
                    <td><?= $r['quantidade'] < $r['estoque_min'] ? 'BAIXO' : 'OK' ?></td>
                    <td>
                        <a href="atualizar_estoque.php?tabela=<?= $tabela ?>&id=<?= $r["id$tabela"] ?>&operacao=incluir"><button
                                style="color: green;">+</button></a>
                        <a href="atualizar_estoque.php?tabela=<?= $tabela ?>&id=<?= $r["id$tabela"] ?>&operacao=retirar"><button
                                style="color: red;">-</button></a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endforeach; ?>
    <button onclick="location.href='index.php'">Voltar</button>
</div>