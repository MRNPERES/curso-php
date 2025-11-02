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
                $frase = "Eu vou estudar PHP";
                $cont = str_word_count($frase, 0);
                echo $cont;
            ?>
        </main>
    </div>
</body>
</html>