<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php
                $es = isset($_GET["est"]) ? $_GET["est"]:0;
                switch ($es) {
                case 1:
                    $reg = "REGIÃO NORTE";
                    break;
                case 2:
                    $reg = "REGIÃO NORDESTE";
                    break;
                case 3:
                    $reg = "REGIÃO CENTRO-OESTE";
                    break;
                case 4:
                    $reg = "REGIÃO SUDESTE";
                    break;
                case 5: 
                    $reg = "REGIÃO SUL";
                    default;
                }
                echo "Você mora na <span class='foco'>$reg<span>";
            ?>
            <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </main>
    </div>
</body>
</html>