<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos do PHP</title>
</head>
<body>
    <h1>Operadores Aritméticos do PHP</h1>

    <?php 
        $calc = 2 + 2;
        echo "O Valor 2 + 2 é: $calc";
        echo "<br>";
        var_dump($calc);
        echo "<br>";
        echo "<br>";
    ?>

    <?php 
        echo "Isso ocorre pois no PHP existe o Operador de Concatenação (.) <br> e o Operador Aritmético de Adição (+). O que é totalmente do <br> que ocorre no JavaScript.";
        echo "<br>";
        echo "<br>";
        $calc = "2" + "2";
        echo "O Valor '2' + '2' é: $calc";
        echo "<br>";
        var_dump($calc);
        echo "<br>";
        echo "<br>";
    ?>

    <?php   
        echo "Para fazer a Concatenação:";
        echo "<br>";
        echo "<br>";
        $calc = "2" . "2";
        echo "O Valor '2' . '2' é: $calc";
        echo "<br>";
        var_dump($calc);
        echo "<br>";
        echo "<br>";
    ?>

</body>
</html>