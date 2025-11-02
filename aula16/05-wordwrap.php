<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wordwrap PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
                $res = wordwrap($txt, 5, "<br>\n", false);
                echo ($res);
            ?>
        </main>
    </div>
</body>
</html>