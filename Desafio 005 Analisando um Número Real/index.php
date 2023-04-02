<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Analisador de Número Real</title>
</head>

<body>

    <section>
        <h1>Analisador de Número Real</h1>
        <form action="calc.php" method="get">
            <label for="valor">Número Real:</label>
            <!-- o name será utilizado no PHP e o id no JavaScript -->
            <input type="number" name="valor" id="id_valor" step="0.001">
            <input type="submit" value="Analisar">
            <input type="reset" value="Limpar">
        </form>
    </section>

</body>

</html>