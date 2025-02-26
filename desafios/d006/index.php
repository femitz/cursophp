<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Capturando os dados do Fomulario retroalimentado.
    $dividendo  = $_GET["dividendo"] ?? 0;
    $divisor  = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?> " method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $dividendo ?>">
            <label for="v2">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php

        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?= "$dividendo" ?></td>
                <td><?= "$divisor" ?></td>
            </tr>
            <tr>
                <td><?= "$resto" ?></td>
                <td><?= "$quociente" ?></td>
            </tr>
        </table>

    </section>

</body>

</html>