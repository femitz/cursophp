<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $reais = $_GET["reais"];

        $totalDolar = number_format($reais / $cotacao, 2, ".");

        echo "Seus R$ $reais equivalem a U$ $totalDolar";
        echo "<p>Cotação atual: <strong>U$$cotacao</strong></p>";

        echo "<p>*Cotação obitida diretamente do site do <strong>Banco Central do Brasil</strong></p>"
        ?>
        <button onclick="location.href='index.html'">
            Voltar
        </button>

    </main>

</body>

</html>