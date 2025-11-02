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
                $vetor[0] = "Curso";
                $vetor[1] = "em";
                $vetor[2] = "Vídeo";
                $texto = implode("#", $vetor);
                print($texto);
            ?>
        </main>
    </div>
</body>
</html>