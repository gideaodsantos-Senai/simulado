<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Produtos</title>
</head>

<body>
    <h1>Registro de Produtos</h1>
    <fieldset>
        <legend>Escolha o Produto que deseja Registrar</legend>
        <label for="">Notbook</label>
        <button><a href="../registros/registroNotbook.php">Registrar Notbook</a></button>
        <br>
        <label for="">Smart TV</label>
        <button><a href="../registros/registroTv.php">Registrar Smart TV</a></button>
        <br>
        <label for="">Smartphone</label>
        <button><a href="../registros/registroCelular.php">Registrar Smartphone</a></button>
        <br><br>
        <button><a href="../../simulado/index.php">Voltar</a></button>
    </fieldset>
</body>

</html>