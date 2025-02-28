<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $tempo = $_GET["tempo"] ?? 0;
        ?>

        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?= $tempo ?>">


            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        $sobra = $tempo;

        // Total de semanas
        $semanas = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;

        // Total de dias
        $dias = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;

        // Total de horas
        $horas = (int) ($sobra / 3_600);
        $sobra = $sobra % 3_600;

        // Total de minutos
        $minutos = (int) ($sobra / 60);
        $sobra = $sobra % 60; // segundos


        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($tempo, 0, ",", ".") ?> segundos</strong> equivalem a um total de:</p>
        <p><?= $semanas ?> semanas</p>
        <p><?= $dias ?> dias</p>
        <p><?= $horas ?> horas</p>
        <p><?= $minutos ?> minutos</p>
        <p><?= $sobra ?> segundos</p>
    </section>

</body>

</html>