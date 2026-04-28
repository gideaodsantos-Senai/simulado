<?php include '../config.php'; ?>
<link rel="stylesheet" href="../style.css">
<div class="container">
    <h1>Cadastro de Produtos</h1>
    <form method="GET">
        <input name="busca" placeholder="Buscar produto..." value="<?= $_GET['busca'] ?? '' ?>">
        <button>Pesquisar</button>
    </form>
    <div style="margin: 20px 0;">
        <strong>Novo:</strong> 
        <a href="registroNotbook.php">Notebook</a> | 
        <a href="registroTv.php">TV</a> | 
        <a href="registroCelular.php">Smartphone</a>
    </div>
    <?php
    $termo = $_GET['busca'] ?? '';
    $tabelas = ['notebooks', 'smart_tvs', 'smartphones'];
    foreach ($tabelas as $tabela) {
        $resultado = $conexao->query("SELECT * FROM $tabela WHERE nome LIKE '%$termo%' ORDER BY nome");
        if ($resultado->num_rows > 0) {
            echo "<h3>$tabela</h3><table border='1'><tr><th>Nome<th>Ações</th></tr>";
            while ($linha = $resultado->fetch_assoc()) {
                $id = $linha["id$tabela"];
                echo "<tr>
                    <td>$linha[nome]</td>
                    <td>
                        <a href='editar.php?tabela=$tabela&id=$id'>Editar</a> | 
                        <a href='excluir.php?tabela=$tabela&id=$id' onclick='return confirm(\"Excluir?\")'>Excluir</a>
                    </td>
                </tr>";
            }
            echo "</table>";
        }
    }
    ?>
    <br><button onclick="location.href='../index.php'">Voltar para Início</button>
</div>