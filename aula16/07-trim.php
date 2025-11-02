<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strlen PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $nome ="   Jose da Silva   ";
                echo(strlen($nome));
                $novo = trim($nome);
                echo($novo);
                echo(strlen($novo));
            ?>
        </main>
    </div>
</body>
</html>