<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str_pad PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $nome = "Ricardo";
                $novoNome = str_pad($nome, 20, "*", STR_PAD_RIGHT);
                echo "Seu nome é $novoNome";
            ?>
        </main>
    </div>
</body>
</html>