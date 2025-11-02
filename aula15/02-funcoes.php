<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                include "funcoes2.php";
                echo "<h1>Testando novas funções</h1>";
                ola();
                mostraValor(4);
                echo "<h2> Finalizando Programa...</h2>";
            ?>
        </main>
    </div>
</body>
</html>