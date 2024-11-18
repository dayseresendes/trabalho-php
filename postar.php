<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postar Currículo- Currículo Dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
        <form action="salvar.php" method="post" class="flex items-center justify-center flex-col gap-8">
            <div>
                <h2 class="text-3xl">Curriculo Dev</h2>
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
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Postar</button>
            </div>
        </form>
    </main>
</body>
</html>