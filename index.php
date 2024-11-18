<?php
include 'conexao.php';
include 'read.php'
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="w-full p-4 bg-red-600 text-white text-3xl">
        <h1>Currículo Dev</h1> 
       <form action="postar.php">
        <button type="submit">Poste seu currículo</button>
        </form>
    </header>

    <main class="h-full flex items-center justify-center flex-col gap-4 mt-8">
    <?php
            while ($curriculo = mysqli_fetch_assoc($listarSQL)) {
            ?>
        <div class="card w-96 p-8 bg-red-300 flex flex-col gap-4">
            <div>
                <p class="text-2xl"><?php echo $curriculo['nome'] ?></p>
            </div>
            <div>
                <p class="text-2xl"><?php echo $curriculo['vaga'] ?></p>
            </div>
            <div>
                <p class="text-2xl"><?php echo $curriculo['experiencia'] ?></p>
            </div>
            <div>
                <p class="text-2xl"><?php echo $curriculo['nascimento'] ?></p>
            </div>
            <div>
                <p class="text-2xl"><?php echo $curriculo['telefone'] ?></p>
            </div>
           
            <div>
            <a href="delete.php?id_curriculo=<?php echo $curriculo['id_curriculo']; ?>">Excluir</a>
            <a href="update.php?id_curriculo=<?php echo $curriculo['id_curriculo']; ?>">Atualizar</a>
            
        </div>
          
        </div>
<?php
            }
            ?>
    </main>
</body>
</html>