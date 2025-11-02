<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strrev PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $frase = "Estou aprendendo PHP";
                $pos = stripos($frase, "php");
                echo "$frase </br> A string foi encontrada na posição $pos";
            ?>
        </main>
    </div>
</body>
</html>