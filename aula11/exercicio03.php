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
                $ini = isset($_GET["inicio"])?$_GET["inicio"]:0;
                $fim = isset($_GET["final"])?$_GET["final"]:0;
                $inc = isset($_GET["inc"])?$_GET["inc"]:1;
                
                if ($ini < $fim) {
                while ($ini <= $fim) {
                    echo "$ini ";
                    $ini += $inc;
            }
            }
                else {
                while ($ini >= $fim) {
                    echo "$ini ";
                    $ini -= $inc;
            }
            }        
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </main>
    </div>
</body>
</html>