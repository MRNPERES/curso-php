<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str_repeat PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $frase = "Gosto de estudar Matemática!";
                $novaFrase = str_replace("Matemática", "PHP", $frase);
                echo $novaFrase;
            ?>
        </main>
    </div>
</body>
</html>