<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
            $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
            $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
            $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <main>
            <?php 

            echo "<span class='texto'>$txt</span>";
            ?>
        </main>
        <br><a href="03-exercicio.html">Voltar</a>
    </div>
</body>
</html>