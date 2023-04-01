<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Número Antecessor e Sucessor</title>
</head>

<body>
    <header>
        <h1>Mostrar o Número Antecessor e o Sucessor</h1>
    </header>
    <section>
        <form action="calc.php" method="get">
            <label for="numero">Digite um Número</label>
            <!-- o name será utilizado no PHP e o id no JavaScript -->
            <input type="number" name="numero" id="id_numero">
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </form>
    </section>

</body>

</html>