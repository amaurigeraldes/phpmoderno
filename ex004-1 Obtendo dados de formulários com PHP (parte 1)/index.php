<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Interação com Formulários</title>
</head>
<body>

<header>
    <h1>Apresente-se para nós</h1>
</header>
<section>
<form action="cad.php" method="get"></form>
    <label for="nome">Nome</label>
    <!-- o name será utilizado no PHP e o id no JavaScript -->
    <input type="text" name="nome" id="id_nome">
    <label for="sobrenome">Sobrenome</label>
    <!-- o name será utilizado no PHP e o id no JavaScript -->
    <input type="text" name="sobrenome" id="id_sobrenome">
    <input type="submit" value="Enviar">
</section>

</body>
</html>