<?php
$host = 'localhost';
$db = 'saep_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if (isset($_GET['tabela']) && isset($_GET['id']) && isset($_GET['operacao'])) {
    $tabela = $_GET['tabela'];
    $id = (int)$_GET['id'];
    $operacao = $_GET['operacao'];

    $coluna_id = "";
    if ($tabela === 'notebooks') $coluna_id = 'idnotebooks';
    elseif ($tabela === 'smartphones') $coluna_id = 'idsmartphones';
    elseif ($tabela === 'smart_tvs') $coluna_id = 'idsmart_tvs';

    if ($coluna_id !== "") {
        $ajuste = ($operacao === 'inc') ? "+ 1" : "- 1";
        
        $sql = "UPDATE $tabela SET quantidade = quantidade $ajuste WHERE $coluna_id = $id";
        
        // Se for para decrementar, garante que não fique negativo (opcional, mas bom senso)
        if ($operacao === 'dec') {
            $sql .= " AND quantidade > 0";
        }
        
        $conn->query($sql);
    }
}

header("Location: tabela.php");
exit();
?>
