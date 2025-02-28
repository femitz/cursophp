<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php 
        $din = $_GET["din"] ?? 0;
        ?>

        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="din">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="din" id="din" value="<?= $din ?>" step="5" require>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
    <?php
        $sobra = $din;

        // Total de 100
        $tot100 = floor($sobra / 100);
        $sobra %= 100;

        // Total de 50
        $tot50 = floor($sobra / 50);
        $sobra %= 50;

        // Total de 10
        $tot10 = floor($sobra / 10);
        $sobra %= 10;

        // Total de 5
        $tot5 = floor($sobra / 5);
        $sobra %= 5;


        ?>
        <h2>Totalizando tudo</h2>
        <p>Seu saque de <strong>R$<?= number_format($din, 2, ",", ".") ?></strong> vai resultar em:</p>
        <p><?= $tot100 ?> notas de 100</p>
        <p><?= $tot50 ?> notas de 50</p>
        <p><?= $tot10 ?> notas de 10</p>
        <p><?= $tot5 ?> notas de 5</p>
    </section>

</body>

</html>