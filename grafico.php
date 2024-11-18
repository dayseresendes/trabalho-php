<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico</title>
    <script src = "https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
<h2>Usuários Logados</h2>
    <canvas 
    id="graficoPizza" 
    width="400"
    height="400">
    </canvas>

    <script>
        const ctx= document.getContext('2d'),
        const graficoPie = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: 'Usuarios',
                data: [<?php echo $usuarios_logados;?>, <?php echo $usuarios_deslogados;?>],
            backgroundColor: ['#36A2EB', '#FF6384'],
            borderColor: ['#FFFFFF', '#FFFFFF'],
            borderWidht: 1;
        }
        });
    </script>
</body>
</html>
