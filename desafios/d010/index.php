<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $atual = date("Y");
        $nascimento = $_GET['nascimento'] ?? 2000;
        $ano = $_GET['ano'] ?? $atual;

        ?>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?= $nascimento ?>" max=<?= $atual - 1 ?> min="1900">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $atual ?>)</strong></label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php
        $idade = $ano - $nascimento;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $nascimento ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?></p>
    </section>
</body>

</html>