<?php
    $colorFons = 'white';  

    // Comprovem si l'usuari ha enviat el formulari
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Si l'usuari ha seleccionat un color, canviem el fons
        if (isset($_POST['color'])) {
            $colorFons = $_POST['color'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $colorFons; ?>;
            font-family: Arial, sans-serif;
            transition: background-color 0.5s ease;
        }
    </style>
</head>
<body>
    <h1>Selecciona un color de fons</h1>
    <form method="POST">
        <select name="color">
            <option value="white">Blanc</option>
            <option value="lightblue">Blau Clar</option>
            <option value="lightgreen">Verd Clar</option>
        </select>
        <button type="submit">Canviar Color</button>
    </form>
</body>
</html>
