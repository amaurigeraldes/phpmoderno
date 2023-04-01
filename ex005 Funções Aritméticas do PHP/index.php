<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
</head>

<body>
    <h1>Funções Aritméticas do PHP</h1>

    <?php
        echo "Valor Absoluto de um Número: abs()";
        echo "<br>";
        $num1 = abs(500);
        echo "O Valor Absoluto é: $num1";
        echo "<br>";
        $num2 = abs(-2000);
        echo "O Valor Absoluto é: $num2";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Conversor de Base Numérica: base_convert()";
        echo "<br>";
        $num1 = base_convert(254, 10, 8);
        echo "O Valor em Octal de 254 é: $num1";
        echo "<br>";
        $num2 = base_convert(254, 10, 16);
        echo "O Valor Hexadecimal de 254 é: $num2";
        echo "<br>";
        $num3 = base_convert(254, 10, 2);
        echo "O Valor Binário de 254 é: $num3";
        echo "<br>";
        $num4 = base_convert(1011, 2, 10);
        echo "O Valor Decimal de 1011 é: $num4";
        echo "<br>";
        $num5 = base_convert(1011, 2, 16);
        echo "O Valor Hexadecimal de 1011 é: $num5";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Arredondamento de um Número para Cima: ceil()";
        echo "<br>";
        $num1 = ceil(4.5);
        echo "O Valor 4.5 Arredondado para Cima é: $num1";
        echo "<br>";
        $num2 = ceil(2.1);
        echo "O Valor 2.1 Arredondado para Cima é: $num2";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Arredondamento de um Número para Baixo: floor()";
        echo "<br>";
        $num1 = floor(4.5);
        echo "O Valor 4.5 Arredondado para Baixo é: $num1";
        echo "<br>";
        $num2 = floor(2.99);
        echo "O Valor 2.99 Arredondado para Baixo é: $num2";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Arredondamento Aritmético de um Número: round()";
        echo "<br>";
        $num1 = round(4.5);
        echo "O Valor 4.5 por Arredondmento Aritmético é: $num1";
        echo "<br>";
        $num2 = round(2.99);
        echo "O Valor 2.99 por Arredondmento Aritmético é: $num2";
        echo "<br>";
        $num3 = round(2.99);
        echo "O Valor 2.09 por Arredondmento Aritmético é: $num3";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Calcular a Hipotenusa: hypot()";
        echo "<br>";
        $cateto1 = 3;
        $cateto2 = 4;
        $hipotenusa = hypot($cateto1, $cateto2);
        echo "O Valor da Hipotenusa é: $hipotenusa";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Obter a Divisão Inteira: intdiv()";
        echo "<br>";
        $num1 = 5;
        $num2 = 2;
        $inteiro = intdiv($num1, $num2);
        echo "O Resultado da Divisão Inteira é: $inteiro";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Obter o Resto da Divisão: %";
        echo "<br>";
        $num1 = 5;
        $num2 = 2;
        $resto = ($num1%$num2);
        echo "O Resto da Divisão é: $resto";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Obter a Divisão: /";
        echo "<br>";
        $num1 = 7.5;
        $num2 = 2;
        $resultado = ($num1/$num2);
        echo "O Resultado da Divisão é: $resultado";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Obter a Potênciação: pow()";
        echo "<br>";
        $num1 = 2;
        $num2 = 6;
        $resultado = pow($num1, $num2);
        echo "O Resultado da Potênciação é: $resultado";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Obter a Raiz Quadrada: sqrt(num) ou num**(1/2)";
        echo "<br>";
        $num1 = 81;
        $resultado1 = sqrt($num1);
        echo "O Resultado da Raiz Quadrada é: $resultado1";
        echo "<br>";
        $num2 = 81;
        $resultado2 = $num2 ** (1/2);
        echo "O Resultado da Raiz Quadrada é: $resultado2";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Obter a Raiz Cúbica: num**(1/3)";
        echo "<br>";
        $num = 27;
        $resultado = $num ** (1/3);
        echo "O Resultado da Raiz Cúbica é: $resultado";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Obter o Valor Mínimo e o Máximo: min() e max()";
        echo "<br>";
        echo "de: 5, 2, 7.5, 6.2, 3.3, 1.7";
        echo "<br>";
        $nMin = min(5, 2, 7.5, 6.2, 3.3, 1.7);
        $nMax = max(5, 2, 7.5, 6.2, 3.3, 1.7);
        echo "O Menor Número é: $nMin";
        echo "<br>";
        echo "O Maior Número é: $nMax";
        echo "<br>";
        echo "<br>";
    ?>

    <?php 
        echo "Obter o Valor de PI: pi() ou M_PI";
        echo "<br>";
        $num1 = pi();
        echo "O valor de pi é $num1";
        echo "<br>";
        $num2 = M_PI;
        echo "O valor de pi é $num2";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        echo "Seno, Cosseno e Tangente: sin(), cos(), tan()";
        echo "<br>";
        $num1 = sin(30);
        $num2 = cos(45);
        $num3 = tan(120);
        echo "O Seno de 30 é: $num1";
        echo "<br>";
        echo "O Cosseno de 45 é: $num2";
        echo "<br>";
        echo "A Tangente de 120 é: $num3";
        echo "<br>";
        echo "<br>";
    ?>


</body>

</html>