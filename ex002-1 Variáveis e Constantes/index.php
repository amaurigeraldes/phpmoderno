<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Exemplos de Variáveis e Constantes em PHP Moderno </h1>    

    
    <!-- Regras para Criação de Nomes de Variáveis:
    1) Sempre começam com o símbolo $;
    2) O 2º dígito deverá ser uma letra ou o símbolo _;
    3) A partir do 3º dígito a-z, A-Z, 0-9 e _;
    4) Caracter ASCii a partir de 128;
    5) Aceita caracteres acentuados;
    6) É Case Sensitive;
    7) Não utilizar palavras reservadas em nomes de variáveis;
    8) Não utilizar espaços na criação de nomes;
    -->


     <!-- Recomendações para Criação de Nomes de Variáveis:
    1) Dar nomes claros e de fácil identificação;
    2) Evitar nomes muito curtos ou muito longos;
    3) Definir um padrão e utilizar em todo o projeto;
    4) Preferir letras minúsculas para Variáveis;
    5) Preferir letras maiúsculas para Constantes;
    6) Utilizar camelCase para Métodos e Atributos;
    7) Usar SNAKE_CASE para nomear Constantes;
    -->
    

    <?php 
    // Tanto as Variáveis quanto as Constantes são armazenadas no Servidor 
    $nome = "Amaurí";
    $sobrenome = "Geraldes";

    const PAIS = "Brasil";

    $idade = 60;
    $peso = 84;
    $casado = true;

    const CURSO = "TI";


    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;


    ?>


</body>
</html>