<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>

    <?php
    $nome = "Felipe";
    // 0x = hexadecimal 0b = binário 0 = octal
    $idade = 21;
    $peso = 61.5;

    echo "$nome tem $idade anos e pesa $peso kg \n";

    $array = [6, 2.5, "Felipe", 3, false];
    var_dump($array);

    ?>

    <p>
        <?= 'aspas simples: $nome' ?>
    </p>

    <p>
        <?= "aspas dupla: $nome" ?>
    </p>

    <p>
        <?php
        const ESTADO = "São Paulo";
        echo "Moro no estado de: " . ESTADO;
        ?>
    </p>

    <p>
        <?php
        echo "Hoje é o ano de: " . date("Y");
        ?>
    </p>

    <p>
        <?php
        $curso = "Ciência da computação";
        $ano = date("Y");
        echo <<< FRASE
            Estou estudando 
                $curso no ano $ano
            Como está sendo esse ano de $ano?
                Abraços! \u{1F596}

        FRASE;
        ?>
    </p>

    <p>
        <?php
        $curso = "Ciência da computação";
        $ano = date("Y");
        echo <<< 'FRASE'
            Estou estudando 
                $curso no ano $ano
            Como está sendo esse ano de $ano?
                Abraços! \u{1F596}

        FRASE;
        ?>
    </p>


</body>

</html>