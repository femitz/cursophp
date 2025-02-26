<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $minimo = 1_380.60;
        $salario = $_GET['sal'] ?? $minimo;

        ?>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<? $salario ?>" step="0.01">
            <p>Considerando o salário minimo de <strong>R$<?= number_format($minimo, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>
            Resultado Final
        </h2>
        <?php
        $total = intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo "<p>Quem ganha R\$" . number_format($salario, 2, ",", ".") . " ganha $total salários minimos + R\$ " . number_format($dif, 2, ",", ".") . "</p>";
        ?>
    </section>
</body>

</html>