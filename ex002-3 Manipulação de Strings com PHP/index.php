<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings com PHP</title>
</head>
<body>
    
<h1>Manipulação de strings com PHP</h1>

<h2>Qual a diferença entre utilizar Aspas Simples e Aspas Duplas no PHP?</h2>

<h3>São 04 Formatos de Strings: </h3>
<ol>
    <li>Double Quoted</li>
    <li>Single Quoted</li>
    <li>Heredoc</li>
    <li>Nowdoc</li>
</ol>

<h4>1.Double Quoted e 2.Single Quoted</h4>

<h4>Exemplos de double quoted "" Aspas Duplas, de single quoted '' Aspas Simples e de <br>. para a Concatenação de Strings</h4>

<?php 
echo "Exemplo 01:";
echo "<br>";
echo "Curso " . "PHP";
echo "<br>";
echo "<br>";
?>


<?php 
// \u para exibição de caracteres especiais Unicode(Versão 7 em diante)
// Mostrar um Emoji
echo "Exemplo 02:";
echo "<br>";
echo "Quando houver Aspas Duplas o PHP irá Interpretar a String:";
echo "<br>";
echo "PHP\u{1F418}";
echo "<br>";
echo "Quando houver Aspas Simples o PHP simplesmente mostrará o Conteúdo:";
echo "<br>";
echo 'PHP\u{1F418}';
echo "<br>";
echo "<br>";
?>

<?php 
echo "Exemplo 03:";
echo "<br>";
$nome = "Amaurí";
echo "Olá $nome!";
echo "<br>";
echo 'Olá $nome!';
echo "<br>";
echo "<br>";
?>


<?php 
echo "Exemplo 04:";
echo "<br>";
echo "Interpolação com Variáveis: somente quando são utilizadas as Aspas Duplas:";
echo "<br>";
$nome = 'Amaurí \u{1F596}';
$sobrenome = "Geraldes \u{1F596}";
echo "Olá $nome $sobrenome \u{1F596}";
echo "<br>";
echo 'Olá $nome $sobrenome \u{1F596}';
echo "<br>";
echo "<br>";
?>

<?php 
echo "Exemplo 05:";
echo "<br>";
echo "Interpolação com Constantes: não funciona pois constantes não possuem o $:";
echo "<br>";
const ESTADO = "RJ";
echo "Moro no ESTADO";
echo "<br>";
echo 'Moro no ESTADO';
echo "<br>";
echo "Usar a Concatenação para solucionar o problema: ";
echo "<br>";
echo "Moro no " . ESTADO;
echo "<br>";
echo "<br>";
?>

<?php 
echo "Exemplo 06:";
echo "<br>";
echo "Interpolação com Resultado de Funções: não funciona:";
echo "<br>";
echo "Estamos no ano de date('Y')";
echo "<br>";
echo 'Estamos no ano de date("Y")';
echo "<br>";
echo "Usar a Concatenação para solucionar o problema: ";
echo "<br>";
echo 'Estamos no ano de ' . date("Y");
echo "<br>";
echo "<br>";
?>

<?php 
echo "Exemplo 07:";
echo "<br>";
echo "Utilização de Aspas Duplas dentro de Aspas Duplas ou de Aspas Simples dentro de Aspas Simples:";
echo "<br>";
$nome = "Amauri";
$sobrenome = "Geraldes";
$nomedomeio = "Moreira";
echo "No exemplo abaixo, dá erro pois ele considera 2 strings e algo no meio que ele não consegue interpretar.";
// echo "$nome "Moreira" $sobrenome";
echo "<br>";
echo "No exemplo abaixo, ele não dá erro de sintaxe, mas existe um erro de semântica e o resultado não é o esperado";
echo "<br>";
echo '$nome "Moreira" $sobrenome';
echo "<br>";
echo "Usar a Sequência de Escape para solucionar o problema: ";
echo "<br>";
echo "$nome \"Moreira\" $sobrenome";
echo "<br>";
echo "$nome '$nomedomeio' $sobrenome";
echo "<br>";
echo "$nome 'Moreira' $sobrenome";
echo "<br>";
echo "<br>";
?>

<?php 
echo "Exemplo 08:";
echo "<br>";
echo "Outras Sequências de Escape usando Aspas Duplas:";
echo "<br>";
echo "Porém, as Opções abaixo não funcionam no Modo Html";
echo "<br>";
echo "\n => Nova Linha";
echo "<br>";
echo "$nome\n\t \"$nomedomeio\" \n\t$sobrenome";
echo "<br>";
echo "\t => Tabulação Horizontal";
echo "<br>";
echo "$nome\t\t \"$nomedomeio\" \t\t$sobrenome";
echo "<br>";
echo "\\ => Barra Invertida";
echo "<br>";
echo "\$ => Mostra o sinal de $";
echo "<br>";
echo "\u{1F596} => Mostrar um Emoji (Codepoint Unicode)";
echo "<br>";
echo "<br>";
?>


<h4>3.Heredoc</h4>
<h4>Sintaxe e Exemplos de Heredoc</h4>
<p>Aceita várias linhas e faz a Interpretação.</p>

<?php 
    $curso = "PHP";
    $ano = date('Y');
    echo <<< TESTE
        Estou estudando


                $curso em $ano!
    TESTE;
?>

<h4>4.Nowdoc</h4>
<h4>Sintaxe e Exemplos de Nowdoc</h4>
<p>Aceita várias linhas mas não faz a Interpretação.</p>

<?php 
    $curso = "PHP";
    $ano = date('Y');
    echo <<< 'TESTE'
        Estou estudando

        
                $curso em $ano!
    TESTE;
?>



</body>
</html>