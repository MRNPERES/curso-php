<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Variáveis de PHO</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $x = "abc";
                $$x = "def";
                echo "O conteúdo da variável X é $x";
                echo "<br>A variável ABC criada recebeu o valor $abc";
            ?>
        </main>
    </div>
</body>
</html>