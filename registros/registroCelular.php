<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome3'];
    $quantidade = $_POST['quantidade3'];
    $estoque_min = $_POST['estoque_min3'];
    $tensao = $_POST['tensao3'];
    $dimensoes = $_POST['dimensoes3'];
    $resolucao_tela = $_POST['resolucao_tela3'];
    $capacidade_arma = $_POST['capacidade_arma3'];
    $conectividade = $_POST['conectividade3'];

    $sql = "INSERT INTO smartphones 
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
    <title>Registro de Produtos - SmartPhones</title>
</head>

<body>
    <h1>Registro de Celular</h1>
    <form action="registroCelular.php" method="POST">
        <label for="nome3">Nome:</label>
        <input type="text" name="nome3" placeholder="Insira o Nome" required>
        <br>
        <label for="quantidade3">Quantidade:</label>
        <input type="number" name="quantidade3" placeholder="Insira a Quantidade" required>
        <br>
        <label for="estoque_min3">Estoque Mínimo:</label>
        <input type="number" name="estoque_min3" placeholder="Insira o Estoque Mínimo" required>
        <br>
        <label for="tensao3">Tensão:</label>
        <input type="text" name="tensao3" placeholder="Insira a Tensão" required>
        <br>
        <label for="dimensoes3">Dimensões:</label>
        <input type="text" name="dimensoes3" placeholder="Insira as Dimensões" required>
        <br>
        <label for="resolucao_tela3">Resolução da Tela:</label>
        <input type="text" name="resolucao_tela3" placeholder="Insira a Resolução da Tela" required>
        <br>
        <label for="capacidade_arma3">Capacidade de Armazenamento:</label>
        <input type="text" name="capacidade_arma3" placeholder="Insira a Capacidade de Armazenamento" required>
        <br>
        <label for="conectividade3">Conectividade:</label>
        <input type="text" name="conectividade3" placeholder="Insira a Conectividade" required>
        <br>
        <input type="submit">
        <br><br>
        <button><a href="../registros/registroProduto.php">Voltar</a></button>
</body>

</html>