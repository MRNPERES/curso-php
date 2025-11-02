<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substr_count PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $frase = "Estou aprendendo PHP no curso em video de PHP";
                $cont = substr_count($frase, "PHP");
                print "A palavra PHP foi encontrada $cont vezes!";
            ?>
        </main>
    </div>
</body>
</html>