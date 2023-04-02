<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Conversão</title>
</head>

<body>
    <header>
        <h1>Conversão para Dólar</h1>
    </header>
    <main>
        <?php 
        
        // $_REQUEST funciona para todas as Variáveis Superglobais: $_GET, $_POST e $_COOKIES
        // ?? é o Operador de Coalescência Nula: a partir do PHP Versão 7
            $valor = $_GET["valor"] ?? 0;

            if ($valor != "") {
                $cotacao = 5.17;
                $dolar = $valor / $cotacao;
                // echo "Seus R\$". number_format($valor, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".").".";
                // echo "Conforme a Cotação Fixa de US\$" . number_format($cotacao, 2, ",", ".") . " informada diretamente no Código.";
                
                
                // Formatação de Moedas com Internacionalização:
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Seus <strong>". numfmt_format_currency($padrao, $valor, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>."."</p>";
                echo "<p>Conforme Cotação Fixa de <strong>" . numfmt_format_currency($padrao, $cotacao, "USD") . "</strong> informada diretamente no Código.</p>";
            
            } else {
                echo "Digite um Valor Válido!"; 
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>