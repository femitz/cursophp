<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $reais = $_GET["reais"];
        $valorDolar = 5.73;
        $totalDolar = $reais / $valorDolar;
        echo "Seus R$ $reais equivalem a U$ $totalDolar";

        echo "<p><strong>*Cotação fixa de R$$valorDolar</strong> informada diretamente no código.</p>"
        ?>
        <button onclick="location.href='index.html'">
            Voltar
        </button>

    </main>

</body>

</html>