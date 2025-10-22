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
            $nome = isset($_GET["nome"]) ? $_GET["nome"]:"[Não informado]";
            $ano = isset ($_GET["nasc"]) ? $_GET["nasc"]: 0;
            $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"]: "[sem sexo]";
            $idade = date("Y") - $ano;
            echo "Você se chama $nome é $sexo e tem $idade anos."
            ?>
        </main>
       <br/> <a href="02-exercicio.html">Voltar</a>
    </div>
</body>
</html>