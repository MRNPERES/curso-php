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
            <pre>
                <table border="1">
            <?php 
                $c = range(5,20,2);
                foreach ($c as $valor) {
                    echo "<td> $valor";
                }
            ?>
            </table>
            </pre>
        </main>
    </div>
</body>
</html>