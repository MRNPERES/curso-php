<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referência PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $a = 3;
                $b = &$a;
                $b += 5;
                echo "A variável A vale $a";
                echo "<br>A variável B vale $b";
            ?>
        </main>
    </div>
</body>
</html>