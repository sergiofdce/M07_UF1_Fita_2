<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $number = $_POST["textQuantity"];

        echo "<h1>Numero de comandas: " . $number . "</h1>";

        for ($i = 1; $i <= $number; $i++) {
            echo "<a href='ex22pagina3.php?comanda=" . $i . "'> Comanda: " . $i . "</a> <br><br>";
        }

    ?>



    
</body>
</html>