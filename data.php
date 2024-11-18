<?php
require_once 'conexao.php';

$stmt = $conn-> prepare('SELECT * FROM curriculo');
$stmt-> execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);

?>
