<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> <link rel="stylesheet" type="text/css" href="../../3. Vorlesungswoche /Aufgabe 2/style.css"></title>
</head>

<body>
	<h1>Ergebnis</h1>
    <table>
        <tr>
            <th class="header">Menge [l]</th>
            <th class="header">Preis [Euro]</th>
        </tr>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            // Annahme: Menge und Kraftstoffart sind bereits definiert
            $mengeInLitern = 50;
            $kraftstoffart = "Diesel";

            // Preis pro Liter basierend auf der ausgewählten Kraftstoffart
            $kraftstoffPreise = [
                "Diesel" => 1.8,
                "Super" => 1.9,
                "Benzin95" => 1.85
            ];
			$preisProLiter = $kraftstoffPreise[$kraftstoffart];

            // Gesamtpreis berechnen
            $gesamtpreis = $mengeInLitern * $preisProLiter;

            // Zeilen abwechselnd hervorheben mit CSS-Klassen
            $rowClass = ($i % 2 == 0) ? "even" : "odd";

            echo "<tr class=\"$rowClass\">";
            echo "<td>$mengeInLitern</td>";
            echo "<td>$gesamtpreis</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>