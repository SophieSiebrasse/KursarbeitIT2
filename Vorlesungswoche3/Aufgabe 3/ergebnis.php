<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ergebnis</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<h1>Ergebnis</h1>
    <table>
        <tr>
            <th class="header">Y</th>
            <th class="header">X</th>
        </tr>
        <?php
        include("../../3. Vorlesungswoche /Aufgabe 3/berechnung.php");
        for ($x = -5; $x <= 5; $x++) {
            // Berechnung der Funktion
            $y = $a * pow($x, 3) + $b * pow($x, 2) + $c * $x + $d;
            echo "<tr>";
            echo "<td>$y</td>";
            echo "<td>$x</td>";
            echo "</tr>";
        }
        ?>
    </table>
	
</body>
</html>