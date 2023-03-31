<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos do PHP</title>
</head>
<body>

<h1>Tipos Primitivos do PHP</h1>

<h2>São 03 Categorias dos Tipos Primitivos:</h2>

<h3>01 - Categoria dos Tipos Primitivos Escalares são 04: string, integer, float e boolean</h3>

<p>São 04 Tipos Primitivos Escalares:</p>

<p>01 - Tipo Escalar String:</p>
<!-- Tipo String -->
<!-- '' Aspas Simples -->
<!-- "" Aspas Duplas -->
$sobrenome = "Silva";

<p>02 - Tipo Escalar Int ou Integer:</p>
<!-- Tipo Int ou Integer -->
$idade = 34;

<p>03 - Tipo Escalar Float ou Double:</p>
<!-- Tipo Float, Double ou Real (eliminada versão 7.4) -->
$peso = 85.9;

<p>04 - Tipo Escalar Bool ou Boolean:</p>
<!-- Tipo Bool ou Boolean -->
$casado = true;


<p>Exemplos: <br>
"RJ" => string <br>
3.1415 => float ou double
17 => Int ou Integer <br>
true => bool <br>
"" => string <br>
-19 => Int ou Integer <br>
"false" => string  <br>
0x1A => Int ou Integer pois é um Hexadecimal <br>
3e2 => float ou double pois é uma Potência <br>
"1024" => string <br>
</p>

<h2>Teste de Tipos Primitivos </h2>

<?php 
// 0x é Hexadecimal; 0b é Binário; 0 é Octal
$num = 3e2;
echo "O Valor de 3e2 é 3x(10)² é $num <br>"; 
$num1 = 0x1A;
echo "O Valor de 0x1A em Hexadecimal é $num1 <br>"; 
$num2 = 0b101;
echo "O Valor de 0b101 em Binário é $num2 <br>";
$num3 = 010;
echo "O Valor de 010 em Octal é $num3 <br>";

$v1 = 300;
echo "$v1 <br>";
var_dump($v1);
echo "<br>";

$v2 = "Amaurí";
echo "$v2 <br>";
var_dump($v2);
echo "<br>";

$v3 = 45.2;
echo "$v3 <br>";
var_dump($v3);
echo "<br>";

// Na tela usando echo ou print, true mostra 1 e false mostra "" (vazio)
$v4 = true;
echo "$v4 <br>";
var_dump($v4);
echo "<br>";

$v5 = 5e3;
echo "$v5 <br>";
var_dump($v5);
echo "<br>";

// Utilizando a Coerção para Transformar em Inteiro
$v6 = (integer)5e3;
echo "$v6 <br>";
var_dump($v6);
echo "<br>";

// Utilizando a Coerção para Transformar em Float
$v7 = (float)"950.5";
echo "$v7 <br>";
var_dump($v7);
echo "<br>";
?>


 
<h3>02 - Categoria dos Tipos Primitivos Compostos são 02: array e object</h3>

<p>Exemplo de Array:</p>
<?php 
// Array
// Criando um Vetor
$vetor = [6, 2.5, "Maria", 5, true];
var_dump($vetor);
echo "<br>";
?>

<p>Exemplo de Object:</p>
<?php 
class Pessoa {
    private string $nome;
}
    $p = new Pessoa;
    var_dump($p);
    echo "<br>";

?>



<h3>03 - Categoria dos Tipos Primitivos Especiais são 04: null, resource, callabe e mixed (surgiu na Versão 8.0 e representa todos os demais Tipos Primitivos)</h3>

<p>Serão estudados mais para a frente.</p>
    
</body>
</html>