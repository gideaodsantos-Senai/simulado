<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

$sql1 = "SELECT * FROM notebooks";
$result1 = $conn->query($sql1);

echo "<h1>Tabela de Produtos</h1>";

echo "<h2>Notebooks</h2>";
if ($result1->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Estoque Mínimo</th>
    <th>Tensão</th>
    <th>Dimensões</th>
    <th>Resolução da Tela</th>
    <th>Capacidade de Armazenamento</th>
    <th>Conectividade</th>
    <th>Status</th>
    </tr>";
    while ($row = $result1->fetch_assoc()) {

        $estoque_baixo1 = $row['quantidade'] < $row['estoque_min'];
        echo "<tr>";

        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['quantidade'] . "</td>";
        echo "<td>" . $row['estoque_min'] . "</td>";
        echo "<td>" . $row['tensao'] . "</td>";
        echo "<td>" . $row['dimensoes'] . "</td>";
        echo "<td>" . $row['resolucao_tela'] . "</td>";
        echo "<td>" . $row['capacidade_arma'] . "</td>";
        echo "<td>" . $row['conectividade'] . "</td>";

        if ($estoque_baixo1) {
            echo "<td>Atenção: Estoque baixo!</td>";
        } else {
            echo "<td>Estoque suficiente</td>";
        }

        echo "</tr>";

    }
    echo "</table>";
} else {
    echo "0 resultados para Notebooks";
}

$sql1 = "SELECT * FROM smart_tvs";
$result1 = $conn->query($sql1);

echo "<h2>Smart TVs</h2>";
if ($result1->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Estoque Mínimo</th>
    <th>Tensão</th>
    <th>Dimensões</th>
    <th>Resolução da Tela</th>
    <th>Capacidade de Armazenamento</th>
    <th>Conectividade</th>
    <th>Status</th>
    </tr>";
    while ($row = $result1->fetch_assoc()) {

        $estoque_baixo2 = $row['quantidade'] < $row['estoque_min'];
        echo "<tr>";

        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['quantidade'] . "</td>";
        echo "<td>" . $row['estoque_min'] . "</td>";
        echo "<td>" . $row['tensao'] . "</td>";
        echo "<td>" . $row['dimensoes'] . "</td>";
        echo "<td>" . $row['resolucao_tela'] . "</td>";
        echo "<td>" . $row['capacidade_arma'] . "</td>";
        echo "<td>" . $row['conectividade'] . "</td>";

        if ($estoque_baixo2) {
            echo "<td>Atenção: Estoque baixo!</td>";
        } else {
            echo "<td>Estoque suficiente</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados para Smart TVs";
}

$sql1 = "SELECT * FROM smartphones";
$result1 = $conn->query($sql1);

echo "<h2>Smartphones</h2>";
if ($result1->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Estoque Mínimo</th>
    <th>Tensão</th>
    <th>Dimensões</th>
    <th>Resolução da Tela</th>
    <th>Capacidade de Armazenamento</th>
    <th>Conectividade</th>
    <th>Status</th>
    </tr>";
    while ($row = $result1->fetch_assoc()) {

        $estoque_baixo3 = $row['quantidade'] < $row['estoque_min'];
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['quantidade'] . "</td>";
        echo "<td>" . $row['estoque_min'] . "</td>";
        echo "<td>" . $row['tensao'] . "</td>";
        echo "<td>" . $row['dimensoes'] . "</td>";
        echo "<td>" . $row['resolucao_tela'] . "</td>";
        echo "<td>" . $row['capacidade_arma'] . "</td>";
        echo "<td>" . $row['conectividade'] . "</td>";

        if ($estoque_baixo3) {
            echo "<td>Atenção: Estoque baixo!</td>";
        } else {
            echo "<td>Estoque suficiente</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados para Smartphones";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
</head>

<body>
    <button><a href="index.php">Voltar</a></button>
</body>

</html>