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
                $txt = str_repeat("PHP ", 5);
                echo "<p>$txt</p>";
                print str_repeat("-", 20);
            ?>
        </main>
    </div>
</body>
</html>