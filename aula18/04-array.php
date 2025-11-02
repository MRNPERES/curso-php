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
                $v = array( 3=>5,
                            1=>9,
                            0=>8,
                            7=>7);
                $v[]= "E";
                unset($v[1]);
                print_r($v);
            ?>
            </table>
            </pre>
        </main>
    </div>
</body>
</html>