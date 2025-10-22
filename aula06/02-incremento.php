<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $atual = $_GET["aa"]; // Essa linha vai pegar o ano na URL
                echo "O ano atual é $atual e o ano anterior é ". --$atual;
            ?>
        </main>
    </div>
</body>
</html>