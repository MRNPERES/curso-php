<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $ano = $_GET["ano"];
                $idade = 2014 - $ano;
                echo "Quem nasceu em $ano tem idade $idade";
                $tipo = ($idade>=18 && $idade <65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
                echo ". E dessa forma seu voto é $tipo";
            ?>
        </main>
    </div>
</body>
</html>