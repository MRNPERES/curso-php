<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <?php 
                $a = isset($_GET["ano"]) ? $_GET["ano"]:1900;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e terá $i anos. <br>";
                if ($i >= 18) {
                    $v = "Já pode VOTAR!";
                    $d = "Já pode DIRIGIR";
                }
                else {
                    $v = "NÃO pode VOTAR!";
                    $d = "NÃO pode DIRIGIR!";
                }
                echo "Com essa idade você $v e também $d."
            ?>
        </main>
        <a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>