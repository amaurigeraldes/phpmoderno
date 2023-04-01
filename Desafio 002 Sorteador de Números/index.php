<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Gerador de Números Aleatórios</title>
</head>

<body>

    <main>
        <h2>Gerador de Números Aleatórios</h2>
        <?php 
            echo "<p>Gerando um Número Aleatóriamente entre 0 e 100...</p>";
            $num = mt_rand(0, 100);
            echo "<p>O Número Gerado foi: <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>

</body>

</html>