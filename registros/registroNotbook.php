<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome1'];
    $quantidade = $_POST['quantidade1'];
    $estoque_min = $_POST['estoque_min1'];
    $tensao = $_POST['tensao1'];
    $dimensoes = $_POST['dimensoes1'];
    $resolucao_tela = $_POST['resolucao_tela1'];
    $capacidade_arma = $_POST['capacidade_arma1'];
    $conectividade = $_POST['conectividade1'];

    $sql = "INSERT INTO notebooks 
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
    <title>Registro de Produtos - Notbook</title>
</head>

<body>
    <h1>Registro de Notbook</h1>
    <form action="registroNotbook.php" method="POST">
        <label for="nome1">Nome:</label>
        <input type="text" name="nome1" placeholder="Insira o Nome" required>
        <br>
        <label for="quantidade1">Quantidade:</label>
        <input type="number" name="quantidade1" placeholder="Insira a Quantidade" required>
        <br>
        <label for="estoque_min1">Estoque Mínimo:</label>
        <input type="number" name="estoque_min1" placeholder="Insira o Estoque Mínimo" required>
        <br>
        <label for="tensao1">Tensão:</label>
        <input type="text" name="tensao1" placeholder="Insira a Tensão" required>
        <br>
        <label for="dimensoes">Dimensões:</label>
        <input type="text" name="dimensoes1" placeholder="Insira as Dimensões" required>
        <br>
        <label for="resolucao_tela">Resolução da Tela:</label>
        <input type="text" name="resolucao_tela1" placeholder="Insira a Resolução da Tela" required>
        <br>
        <label for="capacidade_arma">Capacidade de Armazenamento:</label>
        <input type="text" name="capacidade_arma1" placeholder="Insira a Capacidade de Armazenamento" required>
        <br>
        <label for="conectividade">Conectividade:</label>
        <input type="text" name="conectividade1" placeholder="Insira a Conectividade" required>
        <br>
        <input type="submit">
        <br><br>
        <button><a href="../registros/registroProduto.php">Voltar</a></button>
</body>

</html>