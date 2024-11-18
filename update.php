<?php
    
   require 'conexao.php';
   if(isset($_GET['id_curriculo'])){
   $id = $_GET[ 'id_curriculo'];
   $sql = mysqli_query($connectionBD, "SELECT * FROM curriculo WHERE id_curriculo = $id");
   $count = (is_array($sql)) ? count($sql) : 1;
   if($count){ 
       $n = mysqli_fetch_array($sql);
       $nome = $n['nome'];
       $vaga = $n['vaga'];
       $experiencia =$n['experiencia'];
       $nascimento = $n['nascimento'];
       $telefone = $n['telefone'];
       
   }}
  

if(isset($_POST['atualizar'])){
  $id = $_GET["id_curriculo"];
  $nome = $_POST["nome"];
  $vaga = $_POST["vaga"];
  $experiencia = $_POST["experiencia"];
  $nascimento = $_POST["nascimento"];
  $telefone = $_POST["telefone"];
   

   $queryUpdate = "UPDATE curriculo SET nome = '$nome', vaga = '$vaga', experiencia = '$experiencia', nascimento = '$nascimento', telefone = '$telefone' WHERE id_curriculo = $id";
   $consulta = mysqli_query($connectionBD, $queryUpdate);
   header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Currículo- Currículo Dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
        <form  method="post" class="flex items-center justify-center flex-col gap-8">
            <div>
                <h2 class="text-3xl"> Atualizar currículo Dev</h2>
            </div>
            <div>
                <input type="text" class="w-64 border border-1 border-black rounded p-2" placeholder="Nome" name="nome">
            </div>
            <div>
            <input type="text" class="w-64 border border-1 border-black rounded p-2" placeholder="Vaga desejada" name="vaga">
            </div>
            <div>
            <input type="text" class="w-64 border border-1 border-black rounded p-2" placeholder="Experiencia na área" name="experiencia">
            </div>
            <div>
            <input type="text" class="w-64 border border-1 border-black rounded p-2" placeholder="Data de nascimento" name="nascimento">
            </div>
            <div>
            <input type="number" class="w-64 border border-1 border-black rounded p-2" placeholder="Telefone para contato" name="telefone">
            </div>
            <div>
                <button name="atualizar" type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Atualizar</button>
            </div>
        </form>
    </main>
</body>
</html>

