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

        $fallzeit = sqrt((2 * $fallhoehe) / $erdbeschleunigung[$ausgewaehlterPlanet]);

         echo "<table>
                <tr>
                    <th>Höhe (m)</th>
                    <th>Zeit (s)</th>
                </tr>
                <tr>
                    <td>$fallhoehe</td>
                    <td>$fallzeit</td>
                </tr>
              </table>";
    }
	
	?>
</body>
</html>