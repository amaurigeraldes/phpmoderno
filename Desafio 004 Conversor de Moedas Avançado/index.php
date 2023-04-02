<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Conversor de Moedas Avançado</title>
</head>

<body>
    <header>
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <section>
        <form action="calc.php" method="get">
            <label for="valor">Quantos R$ você tem?</label>
            <!-- o name será utilizado no PHP e o id no JavaScript -->
            <input type="number" name="valor" id="id_valor" step="0.01">
            <input type="submit" value="Converter para Dólares">
            <input type="reset" value="Limpar">
        </form>
    </section>

</body>

</html>