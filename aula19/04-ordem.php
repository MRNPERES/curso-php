<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <main>
            <pre>
                <?php
                    $v = array("A", "M", "J", "X", "K");
                    print_r($v);
                    arsort($v);
                    print_r($v);
                ?>
            </pre>
        </main>
    </div>
</body>
</html>