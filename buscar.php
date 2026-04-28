<?php include 'config.php'; ?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1>Buscar Produto</h1>
    <form method="GET">
        <input name="busca" placeholder="Digite o nome do produto..." required>
        <button>Pesquisar</button>
    </form>
    <?php
    if (isset($_GET['busca'])) {
        $busca = $_GET['busca'];
        echo "<h2>Resultados para: '$busca'</h2>";
        foreach (['notebooks', 'smart_tvs', 'smartphones'] as $tabela) {
            $resultado = $conexao->query("SELECT * FROM $tabela WHERE nome LIKE '%$busca%'");
            if ($resultado->num_rows > 0) {
                echo "<h3>Em $tabela:</h3>
                <table border='1'>
                <tr><th>Nome<th>Quantidade<th>Estoque Mínimo</tr>";
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>$linha[nome]</td>
                            <td>$linha[quantidade]</td>
                            <td>$linha[estoque_min]</td>
                          </tr>";
                }
                echo "</table>";
            }
        }
    }
    ?>
    <br><a href="index.php">Voltar</a>
</div>