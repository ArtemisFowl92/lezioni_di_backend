<!DOCTYPE html>
<html>

<head>
    <title>GENERAL STORE MUSA</title>
</head>

<body>
    <h1>PRODOTTI</h1>
    <?php

    //Array associativo con prodotti e prezzi

    $prodotti = array("torta" => "5", "muffin" => "2", "crostata" => "6", "cheesecake" => "7", "panettone" => "12");

    // tabella

    echo "<h2>Ecco tutti i nostri prodotti:</h2>
    <table>
    <tr>
        <td>Dolce</td>
        <td>Prezzo</td>
    </tr>
    <tr>
        <td>torta</td>
        <td>". $prodotti['torta'] . "</td>
    </tr>
    <tr>
        <td>muffin</td>
        <td>". $prodotti['muffin'] . "</td>
    </tr>
    <tr>
        <td>crostata</td>
        <td>" . $prodotti['crostata'] . "</td>
    </tr>
    <tr>
        <td>crostata</td>
        <td>" . $prodotti['cheesecake'] . "</td>
    </tr>
    <tr>
        <td>crostata</td>
        <td>" . $prodotti['panettone'] . "</td>
    </tr>
    </table><hr>";

    ?>
</body>

</html>