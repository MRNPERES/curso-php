<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2)/2;
                echo "A media entre $nota1 e $nota2 é $media <br/>";
                echo "A situação do aluno é " . (($media<6) ? "REPROVADO":"APROVADO");
            ?>
        </main>
    </div>
</body>
</html>