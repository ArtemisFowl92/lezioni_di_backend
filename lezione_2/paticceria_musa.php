<!DOCTYPE html>
<html>
<head>
    <title>Pasticceria Musa</title>
</head>   
<body>
<?php

//Qui dichiaro tutte le variabili.
           $dolce1 = "crostata";
           $dolce2 = "muffin";
           $dolce3 = "torta";
           $prezzo1 = "5 euro";
           $prezzo2 = "2 euro";
           $prezzo3 = "3 euro";
           $name = "Chiara";
           $orario = date('H:i');
           $data = date('d/m/Y');



//Qui inserisco la funzione per i saluti
           function saluto($name) {
            echo "<h1>Ciao " . $name . "!</h1>
            <h3>Benvenuta alla pasticceria MUSA</h3>
            <hr>";

           }

           saluto($name);

//Qui inserisco la funzione per inserire dolci e prezziario

           function elencaDolci($dolce1, $dolce2, $dolce3, $prezzo1, $prezzo2, $prezzo3) {
            echo "<h2>Ecco tutti i nostri dolci:</h2>
                <table>
                <tr>
                    <td>Dolce</td>
                    <td>Prezzo</td>
                </tr>
                <tr>
                    <td>$dolce1</td>
                    <td>$prezzo1</td>
                </tr>
                <tr>
                    <td>$dolce2</td>
                    <td>$prezzo2</td>
                </tr>
                <tr>
                    <td>$dolce3</td>
                    <td>$prezzo3</td>
                </tr>
                </table><hr>";
                   
           }

           elencaDolci($dolce1, $dolce2, $dolce3, $prezzo1, $prezzo2, $prezzo3);

//Qui inserisco data e ora

            function dataEora($orario, $data) {
                echo "<p>Adesso sono le " . $orario . " del giorno " . $data . "</p>";
                }
    
                dataEora($orario, $data);
   
        ?>

</body>
</html>