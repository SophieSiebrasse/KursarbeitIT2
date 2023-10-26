<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung des Radius, Volumen und der Oberfläche der Kugel</title>
</head>

<body>
<?php
include('../templates/header.php');
include('../templates/menu.php');
include('../includes/functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];

    $ergebnisse = berechneKugel($radius);

    if ($ergebnisse) {
        echo "<h2>Kugelberechnung:</h2>";
        echo "<p>Radius: $radius</p>";
        echo "<table>";
        foreach ($ergebnisse as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Fehler: Bitte geben Sie einen gültigen Radius ein.";
    }
} else {
    echo "<h2>Kugelberechnung:</h2>";
    echo "<form method='post' action='kugel.php'>";
    echo "<label for='radius'>Radius:</label>";
    echo "<input type='number' name='radius' required step='0.01'>";
    echo "<input type='submit' value='Berechnen'>";
    echo "</form>";
}

include('../templates/footer.php');


</html>