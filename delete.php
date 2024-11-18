<?php 
include 'conexao.php';
$id = $_GET["id_curriculo"];

if(isset($_GET['id_curriculo'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM curriculo WHERE id_curriculo = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: index.php');
}
?>