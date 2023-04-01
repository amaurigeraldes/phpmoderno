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
            $numero = $_GET["numero"] ?? "Sem NÚmero";
            
            if ($numero != "") {
                echo "<p>Você digitou o Número: <strong>$numero</strong></p>";
                $antecessor = $numero-1;
                $sucessor = $numero+1;
                echo "<p>O seu antecessor é o Número: <strong>$antecessor</strong></p>";
                echo "<p>O seu sucessor é o Número: <strong>$sucessor</strong></p>";
            } else {
                echo "Digite um Número Corretamente!";
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>