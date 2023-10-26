<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung Zylinder</title>
	<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $r = $_POST["r"];
        $h = $_POST["h"];

        if ($r > 0 && $h > 0) {
            // Berechnungen
            $volumen = M_PI * pow($r, 2) * $h;
            $oberflaeche = 2 * M_PI * $r * ($r + $h);
            $mantelflaeche = 2 * M_PI * $r * $h;

            // Tabelle mit Ergebnissen
            echo "<h2>Berechnungsergebnisse</h2>";
            echo "<table>";
            echo "<tr><th>Größe</th><th>Wert</th></tr>";
            echo "<tr><td>Volumen</td><td>$volumen</td></tr>";
            echo "<tr><td>Oberfläche</td><td>$oberflaeche</td></tr>";
            echo "<tr><td>Mantelfläche</td><td>$mantelflaeche</td></tr>";
            echo "</table>";
        } else {
            echo "Alle Werte müssen größer als 0 sein. Bitte erneut eingeben.";
        }
    }
?>
</body>
</html>