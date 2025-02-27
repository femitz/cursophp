<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 0;

        ?>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Primeiro Valor</label>
            <input type="number" name="v1" id="v1" value="<? $v1 ?>">
            <label for="p1">Primeiro Peso</label>
            <input type="number" name="p1" id="p1" value="<? $p1 ?>" min="1" require>

            <label for="v2">Segundo Valor</label>
            <input type="number" name="v2" id="v2" value="<? $v2 ?>">
            <label for="p2">Segundo Peso</label>
            <input type="number" name="p2" id="p2" value="<? $p2 ?>" min="1" require>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        $ma = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
        $nma = number_format($ma, 2, ",", ".");
        $nmp = number_format($mp, 2, ",", ".");

        ?>
        <h2>
            Cálculo das Médias
        </h2>
        <p>Analisando os valores <?= $v1 ?> e <?= $v2 ?>:</p>

        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= $nma ?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?= $nmp ?>.</li>

        </ul>
        <?php

        ?>
    </section>
</body>

</html>