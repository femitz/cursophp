<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de números</title>
</head>

<body>
    <main>
    <h1>Trabalhando com números aleatórios</h1>
    <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $numero = rand(0, 100);
            echo "<p>O número gerado foi: $numero</p>"
        ?>
        <button onclick="location.href='index.php'">
         🔁 Gerar outro
        </button>
    </main>

</body>

</html>