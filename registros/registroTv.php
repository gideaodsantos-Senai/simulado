<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome2'];
    $quantidade = $_POST['quantidade2'];
    $estoque_min = $_POST['estoque_min2'];
    $tensao = $_POST['tensao2'];
    $dimensoes = $_POST['dimensoes2'];
    $resolucao_tela = $_POST['resolucao_tela2'];
    $capacidade_arma = $_POST['capacidade_arma2'];
    $conectividade = $_POST['conectividade2'];

    $sql = "INSERT INTO smart_tvs 
    (nome, quantidade, estoque_min, tensao, dimensoes, resolucao_tela, capacidade_arma, conectividade)
     VALUES 
     ('$nome',
      '$quantidade',
      '$estoque_min',
      '$tensao',
      '$dimensoes',
      '$resolucao_tela',
      '$capacidade_arma',
      '$conectividade'
        )";
    $conn->query($sql);
    echo "Registro bem-sucedido!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Produtos - Smart TVs</title>
</head>

<body>
    <h1>Registro de Smart-TV</h1>
    <form action="registroTv.php" method="POST">
        <label for="nome2">Nome:</label>
        <input type="text" name="nome2" placeholder="Insira o Nome" required>
        <br>
        <label for="quantidade2">Quantidade:</label>
        <input type="number" name="quantidade2" placeholder="Insira a Quantidade" required>
        <br>
        <label for="estoque_min2">Estoque Mínimo:</label>
        <input type="number" name="estoque_min2" placeholder="Insira o Estoque Mínimo" required>
        <br>
        <label for="tensao2">Tensão:</label>
        <input type="text" name="tensao2" placeholder="Insira a Tensão" required>
        <br>
        <label for="dimensoes2">Dimensões:</label>
        <input type="text" name="dimensoes2" placeholder="Insira as Dimensões" required>
        <br>
        <label for="resolucao_tela2">Resolução da Tela:</label>
        <input type="text" name="resolucao_tela2" placeholder="Insira a Resolução da Tela" required>
        <br>
        <label for="capacidade_arma2">Capacidade de Armazenamento:</label>
        <input type="text" name="capacidade_arma2" placeholder="Insira a Capacidade de Armazenamento" required>
        <br>
        <label for="conectividade2">Conectividade:</label>
        <input type="text" name="conectividade2" placeholder="Insira a Conectividade" required>
        <br>
        <input type="submit">
        <br><br>
        <button><a href="registroProduto.php">Voltar</a></button>
</body>

</html>