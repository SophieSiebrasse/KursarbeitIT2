<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung des Radius, Volumen und der Oberfläche der Kugel</title>
</head>

<body>
<!-- berechnung.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];

    if ($radius > 0) {
        $volumen = (4/3) * M_PI * pow($radius, 3);
        $oberflaeche = 4 * M_PI * pow($radius, 2);

        echo "<h2>Kugelberechnung:</h2>";
        echo "<p>Radius: $radius</p>";
        echo "<p>Volumen: $volumen</p>";
        echo "<p>Oberfläche: $oberflaeche</p>";
    } else {
        echo "Fehler: Bitte geben Sie einen gültigen Radius ein.";
    }
}
</html>