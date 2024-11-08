<?php
    $error_message = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contrasenya1 = $_POST['contrasenya1'];
        $contrasenya2 = $_POST['contrasenya2'];

        // Test 1
        if ($contrasenya1 !== $contrasenya2) {
            $error_message = "ERROR: les contrasenyes han de coincidir";
        }
        // Test 2
        elseif (!contieneNumero($contrasenya1)) {
            $error_message = "ERROR: la contrasenya ha de tenir al menys un número";
        }
        
        if ($error_message === '') {
            $error_message = "Contrasenyes vàlides!";
        }
    }

    function contieneNumero($cadena) {
        for ($i = 0; $i < strlen($cadena); $i++) {
            if (is_numeric($cadena[$i])) {
                return true;
            }
        }
        return false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Formulari de Contrasenyes</h2>

    <form action="ex24pagina2.php" method="POST">
        <label for="contrasenya1">Contrasenya 1:</label>
        <input type="password" id="contrasenya1" name="contrasenya1" required><br><br>
        
        <label for="contrasenya2">Contrasenya 2:</label>
        <input type="password" id="contrasenya2" name="contrasenya2" required><br><br>
        
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($error_message === 'Contrasenyes vàlides!') {
        echo "<p style='color: green;'>$error_message</p>";
    }
    elseif ($error_message !== '') {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

</body>
</html>
