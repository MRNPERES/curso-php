<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcao PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                function teste(&$x) {
                    $x += 2;
                    echo "O valor de X é $x";
                }

                $a = 3;
                teste($a);
                echo "<p>O valor de A é $a</p>";
            ?>
        </main>
    </div>
</body>
</html>