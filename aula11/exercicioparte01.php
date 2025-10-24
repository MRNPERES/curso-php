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
            <form action="exercicioparte02.php" method="get">
                <?php 
                $c = 1;
                while ($c <=5) {
                    echo "valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c ++;
                }
                ?>
                <input type="submit" value="Enviar" class="botao">
            </form>
        </main>
    </div>
</body>
</html>