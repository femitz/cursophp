<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php
        $preco = $_GET["preco"] ?? 0;
        $reaj = $_GET["reaj"] ?? 0;
        ?>

        <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" min="0.10" step="0.01">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p"></span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $reaj?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php
        $aumento = $preco * $reaj / 100;
        $precoFinal = $preco + $aumento;
        ?>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava R$<?= number_format($preco, 2, ",", ".") ?>, com <strong><?= $reaj ?>% de aumento</strong> vai passar a custar <strong>R$<?= number_format($precoFinal, 2, ",", ".") ?></strong> a partir de agora.</p>
    </section>

    <script>
        mudaValor();

        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>

</html>