<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Analisador</title>
</head>

<body>
    <main>
    <h1>Analisador de Número Real</h1>
        <?php
        // $_REQUEST funciona para todas as Variáveis Superglobais: $_GET, $_POST e $_COOKIES
        // ?? é o Operador de Coalescência Nula: a partir do PHP Versão 7
            $valor = $_GET["valor"] ?? 0;

            if ($valor != "") {
                echo "<p>Analisando o número <strong>" . number_format($valor, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

                $inteiro = (int)$valor;
                $decimal = $valor - $inteiro;

                echo "<li>A parte inteira do número é: <strong>" . number_format($inteiro, 0, ",", ".") . "</strong>;</li>";
                echo "<li>A parte fracionária do número é: <strong>" . number_format($decimal, 3, ",", ".") . "</strong>;</li></ul>";
                echo "<br>";
            } else {
                echo "<p>Digite um Valor Válido!</p>"; 
            }
        ?>
        <button onclick="javascript:history.go(-1)">&#x1F519; Voltar</button>
    </main>
</body>

</html>