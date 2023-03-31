<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        // $_REQUEST funciona para todas as Variáveis Superglobais: $_GET, $_POST e $_COOKIES
        // ?? é o Operador de Coalescência Nula: a partir do PHP Versão 7
            $nome = $_GET["nome"] ?? "Sem Nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>";
        ?> 
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    </body>
</html>