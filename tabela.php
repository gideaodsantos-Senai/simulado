<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

echo "<div class='container'>";
echo "<h1>Tabela de Produtos</h1>";

// Notebooks
$sql1 = "SELECT * FROM notebooks";
$result1 = $conn->query($sql1);
echo "<h2>Notebooks</h2>";
if ($result1->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Estoque Mínimo</th>
    <th>Capacidade de Armazenamento</th>
    <th>Conectividade</th>
    <th>Status</th>
    <th>Ações</th>
    </tr>";
    while ($row = $result1->fetch_assoc()) {
        $estoque_baixo = $row['quantidade'] < $row['estoque_min'];
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['quantidade'] . "</td>";
        echo "<td>" . $row['estoque_min'] . "</td>";
        echo "<td>" . $row['capacidade_arma'] . "</td>";
        echo "<td>" . $row['conectividade'] . "</td>";
        echo "<td>" . ($estoque_baixo ? "Atenção: Estoque baixo!" : "Estoque suficiente") . "</td>";
        echo "<td>
            <a href='atualizar_estoque.php?tabela=notebooks&id=" . $row['idnotebooks'] . "&operacao=inc'><button>+</button></a>
            <a href='atualizar_estoque.php?tabela=notebooks&id=" . $row['idnotebooks'] . "&operacao=dec'><button>-</button></a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else { echo "0 resultados para Notebooks"; }

// Smart TVs
$sql2 = "SELECT * FROM smart_tvs";
$result2 = $conn->query($sql2);
echo "<h2>Smart TVs</h2>";
if ($result2->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Estoque Mínimo</th>
    <th>Capacidade de Armazenamento</th>
    <th>Conectividade</th>
    <th>Status</th>
    <th>Ações</th>
    </tr>";
    while ($row = $result2->fetch_assoc()) {
        $estoque_baixo = $row['quantidade'] < $row['estoque_min'];
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['quantidade'] . "</td>";
        echo "<td>" . $row['estoque_min'] . "</td>";
        echo "<td>" . $row['capacidade_arma'] . "</td>";
        echo "<td>" . $row['conectividade'] . "</td>";
        echo "<td>" . ($estoque_baixo ? "Atenção: Estoque baixo!" : "Estoque suficiente") . "</td>";
        echo "<td>
            <a href='atualizar_estoque.php?tabela=smart_tvs&id=" . $row['idsmart_tvs'] . "&operacao=inc'><button>+</button></a>
            <a href='atualizar_estoque.php?tabela=smart_tvs&id=" . $row['idsmart_tvs'] . "&operacao=dec'><button>-</button></a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else { echo "0 resultados para Smart TVs"; }

// Smartphones
$sql3 = "SELECT * FROM smartphones";
$result3 = $conn->query($sql3);
echo "<h2>Smartphones</h2>";
if ($result3->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Estoque Mínimo</th>
    <th>Capacidade de Armazenamento</th>
    <th>Conectividade</th>
    <th>Status</th>
    <th>Ações</th>
    </tr>";
    while ($row = $result3->fetch_assoc()) {
        $estoque_baixo = $row['quantidade'] < $row['estoque_min'];
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['quantidade'] . "</td>";
        echo "<td>" . $row['estoque_min'] . "</td>";
        echo "<td>" . $row['capacidade_arma'] . "</td>";
        echo "<td>" . $row['conectividade'] . "</td>";
        echo "<td>" . ($estoque_baixo ? "Atenção: Estoque baixo!" : "Estoque suficiente") . "</td>";
        echo "<td>
            <a href='atualizar_estoque.php?tabela=smartphones&id=" . $row['idsmartphones'] . "&operacao=inc'><button>+</button></a>
            <a href='atualizar_estoque.php?tabela=smartphones&id=" . $row['idsmartphones'] . "&operacao=dec'><button>-</button></a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else { echo "0 resultados para Smartphones"; }
echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <button onclick="location.href='index.php'">Voltar</button>
</body>
</html>