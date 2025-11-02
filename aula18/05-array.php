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
            <?php 
                $v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
                $cad["fumante"] = true;
                foreach ($v as $k => $valor) {
                    echo "O campo $k possui o valor $valor<br>";
                }  
            ?>
            </table>
            </pre>
        </main>
    </div>
</body>
</html>