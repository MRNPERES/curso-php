<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $c = 10;
                while ($c >= 0) {
                    echo $c . "<br>";
                    $c -=2;
                }
            ?>
        </main>
    </div>
</body>
</html>