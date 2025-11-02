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
                $site = "Curso em Video";
                $vetor = explode(" ", $site);
                print_r($vetor);
            ?>
        </main>
    </div>
</body>
</html>