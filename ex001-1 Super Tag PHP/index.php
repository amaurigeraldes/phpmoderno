<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO PHP</title>
</head>

<body>
    <h1>EXEMPLO PHP</h1>

<!-- Script Tag -->
<!-- Funcionava até a Versão 5.6 -->
<!-- <script language="php">
    $nome = "Amaurí Geraldes";
	echo "O meu nome é $nome";
</script> -->

<!-- Super Tag PHP -->
<?php 
	$nome = "Amaurí Geraldes";
	echo "<p>O meu nome é $nome</p>";
?>

<hr>

<!-- Short Open Tag -->
<?php
	$nome = "Amaurí Geraldes";
	echo "O meu nome é $nome";
?>

<hr>

<!-- ASP Tag -->
<!-- Funcionava até a Versão 5.6 -->
<!-- <%
	$nome = "Amaurí Geraldes";
	echo "O meu nome é $nome";
%> -->

<!-- Short Tag PHP -->
<?
	$nome = "Amaurí Geraldes"
?>
<?=	"<p>O meu nome é $nome</p>" ?>




</body>

</html>