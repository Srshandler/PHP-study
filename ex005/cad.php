<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultasdo do processamento</h1>
    </header>
    <main>
        <?php 
            var_dump($_GET); //$_REQUEST $_POST $_COOKIES
            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];
            echo "<p>É um prazer te conhecer, <strong>$n $s</strong>! Este é o meu site";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior </a>
    </main>
</body>
</html>