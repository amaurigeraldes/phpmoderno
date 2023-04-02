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
        <h1>Conversão para Dólares</h1>
    </header>
    <main>
        <?php
            // Para pegar as Datas do Sistema e substituir nas datas da url da API:
            $dataInicio = date("m-d-Y", strtotime("-7 days"));
            $dataFim = date("m-d-Y");

            // Atribuindo a url da API do Banco Central à Variável $url 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataInicio .'\'&@dataFinalCotacao=\''. $dataFim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // Utilizar true para gerar um vetor (array) e false para gerar um objeto
            $dados = json_decode(file_get_contents($url), true);

            // Mostra as informações a serem utilizadas para extrair o valor da cotação
            // var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

        // $_REQUEST funciona para todas as Variáveis Superglobais: $_GET, $_POST e $_COOKIES
        // ?? é o Operador de Coalescência Nula: a partir do PHP Versão 7
            $valor = $_GET["valor"] ?? 0;

            if ($valor != "") {
                // $cotacao = 5.17;
                $dolar = $valor / $cotacao;
                // echo "Seus R\$". number_format($valor, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".").".";
                // echo "Conforme a Cotação Fixa de US\$" . number_format($cotacao, 2, ",", ".") . " informada diretamente no Código.";
                
                
                // Formatação de Moedas com Internacionalização:
                // Biblioteca intl (Internalization PHP)
                // Habilitar no arquivo php.ini
                // "en_us" USA, "pt_PT" Portugal
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Seus <strong>". numfmt_format_currency($padrao, $valor, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>."."</p>";
                echo "<p>A cotação atual é de <strong>" . numfmt_format_currency($padrao, $cotacao, "USD") . "</strong> extraída do site do <strong>Banco Central do Brasil</strong>.</p>";
            
            } else {
                echo "Digite um Valor Válido!"; 
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>