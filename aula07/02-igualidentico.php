<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual e Identico PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $a = 3;
                $b = "3";
                $r = ($a == $b) ? "SIM":"NÃO"; // se são iguais
                echo "As variavéis A e B são iguais? $r";

                $r = ($a === $b) ? "SIM":"NÃO"; // se são identicos
                echo "<br>As variavéis A e B são identicas? $r";
            ?>
        </main>
    </div>
</body>
</html>