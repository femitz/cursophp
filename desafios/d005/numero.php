<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>
            Analisador de Número Real
        </h1>

        <?php
        $numero = $_POST["n"] ?? 0;

        echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário</p>";

        $int = (int) $numero;
        $fra = $numero - $int ;

        echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . " </strong></li> <li>A parte fracionaria do número é <strong> ". number_format($fra, 3, ",", ".") ." </strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>