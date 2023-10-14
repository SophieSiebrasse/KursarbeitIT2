<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
	<h1>Ergebnis</h1>
	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ausgewaehlterPlanet = $_POST['planet'];
        $fallhoehe = floatval($_POST['fallhoehe']);

        // Erdbeschleunigung auf verschiedenen Planeten (in m/s^2)
        $erdbeschleunigung = [
            'erde' => 9.81,
            'mond' => 1.62,
            'jupiter' => 24.79,
            'mars' => 3.69,
        ];

		if ($fallhoehe < 15) {
            echo "Die Fallhöhe muss mindestens 15 Meter betragen.";
        } else {
            echo "<table>
                    <tr>
                        <th>Fallhöhe (m)</th>
                        <th>Fallzeit (s)</th>
                    </tr>";
            // Schleife für die Berechnung und das Hinzufügen von Zeilen zur Tabelle
            for ($i = $fallhoehe, $step = 0; $step < 10; $i += 100, $step++) {
                $fallzeit = sqrt((2 * $i) / $erdbeschleunigung[$ausgewaehlterPlanet]);
                echo "<tr>
                        <td>$i</td>
                        <td>$fallzeit</td>
                    </tr>";
            }
            
            echo "</table>";
        }
    }
	?>
	
</body>
</html>