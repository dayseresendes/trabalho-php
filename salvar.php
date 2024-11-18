<?php
//Adicionar a conexão com o banco 
include 'conexao.php';
$nome = $_POST['nome'];
$vaga = $_POST['vaga'];
$experiencia = $_POST['experiencia'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$sql = mysqli_query($connectionBD, "INSERT INTO curriculo(nome, vaga, experiencia, nascimento, telefone) VALUES ('$nome', '$vaga','$experiencia', '$nascimento', '$telefone')");

if ($sql){
    header('Location: index.php');

}


?>