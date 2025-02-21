<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo legal Dog</title>
</head>

<body>
    <h1>
        <?php
        echo "legal dog \u{1F30E}";
        // \u{1F30E} = emoji do mundo em formato unicode.
        // echo e print mesma coisa. porem a maioria das pessoa utilizam echo.
        ?>
    </h1>
    <p>
        <?= "Yeah"
        // A tag <?= susbstitui co comando <?php echo 
        ?>
    </p>


    <?php
    $nome = "Felipe";
    echo "<p>Meu nome é $nome</p>";
    ?>


</body>

</html>