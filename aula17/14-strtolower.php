<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strtolower PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $nome = "Ricardo Nunes";
                $nome2 = strtolower($nome);
                echo "Seu nome é $nome2<br>";
            ?>
        </main>
    </div>
</body>
</html>