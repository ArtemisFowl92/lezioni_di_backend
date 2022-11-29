<html>
    <head>
        <title><?php echo 'Nome Pagina'; ?></title>
    </head>    
    <body>
        <?php
           
           $name = "Chiara";
           $testo = "Il mio nome è ";

           echo $testo.$name;

           echo "<p>Il mio nome è " . $name. '</p>';

           echo "Il mio nome è " . $name. '</br>';

           function PrintMyName($name) {
            echo "<strong>Hello " . $name . "!</strong";
           }

           PrintMyName($name);

           function Print_My_Name($name) {
            echo "<strong>Ciao " . $name . "!</strong";
           }
           
           PrintMyName($name);
        ?>
        
    </body>
</html>