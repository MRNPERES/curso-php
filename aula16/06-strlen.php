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
                $txt = "Curso em Video";
                $tam = strlen($txt);
                echo ($tam);
            ?>
        </main>
    </div>
</body>
</html>