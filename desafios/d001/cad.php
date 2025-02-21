<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
        $numero = $_GET["numero"];

        echo "<p>O número escolhido foi: $numero</p>";
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "<p>O número antecessor é $antecessor</p>";
        echo "<p>O número sucessor é $sucessor</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>

    </main>

</body>

</html>