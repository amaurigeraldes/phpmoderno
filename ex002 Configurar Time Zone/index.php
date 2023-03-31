<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<h1>Exemplo de PHP</h1>    
<?php
// Configurar Time Zone pois a Data/Horário são do Servidor CEST
date_default_timezone_set("America/Sao_Paulo");
echo "Hoje é dia " . date("d/M/Y, ");
echo "o Dia da Semana é " . date("D");
echo " e a Hora Atual é " . date("G:i:s T");
?>

</body>
</html>