<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $num = $_GET['num'] ?? 0;

        ?>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Número</label>
            <input type="number" name="num" id="num" value="<? $num ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>
            Resultado Final
        </h2>
        <?php
        $raizQuadrada = sqrt($num);
        $raizCubica = $num ** (1 / 3);
        ?>
        <p>Analisando o <strong>número <?= $num ?></strong>, temos:</p>
        <ul>
            <li>A raiz quadrada é <strong><?= number_format($raizQuadrada, 2, ",", ".") ?></strong></li>
            <li>A raiz cúbica é <strong><?= number_format($raizCubica, 2, ",", ".") ?></strong></li>

        </ul>
    </section>
</body>

</html>