<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <pre>
        <?php

        setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

        session_start();
        $_SESSION["teste"] = "YEAH";

        echo "<h1>Super global GET</h1>";
        var_dump($_GET);

        echo "<h1>Super global POST</h1>";
        var_dump($_POST);

        echo "<h1>Super global REQUEST</h1>";
        var_dump($_REQUEST);

        echo "<h1>Super global COOKIES</h1>";
        var_dump($_COOKIE);

        echo "<h1>Super global SESSION</h1>";
        var_dump($_SESSION);

        echo "<h1>Super global SERVER</h1>";
        var_dump($_SERVER);

        echo "<h1>Super global GLOBALS</h1>";
        var_dump($GLOBALS);
        ?>
        </pre>
    </main>
</body>

</html>