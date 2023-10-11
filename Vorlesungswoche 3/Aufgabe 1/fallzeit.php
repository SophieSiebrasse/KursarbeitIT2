<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fallzeit</title>
</head>

<body>
	Aufgabe 1 - Fallzeit
	<p>Berechnung des freies Falls eines Handys</p>
	<p>Wähle einen Planeten aus, auf welchem du die Fallzeit berechnen möchtest.</p>
	<form method="post">
        <label for="planet">Wähle einen Planeten:</label>
        <select name="planet" id="planet">
            <option value="erde">Erde</option>
            <option value="mond">Mond</option>
            <option value="jupiter">Jupiter</option>
            <option value="mars">Mars</option>
        </select>
        <br>
        <label for="fallhoehe">Fallhöhe (in Metern):</label>
        <input type="number" name="fallhoehe" id="fallhoehe" step="0.01">
        <br>
        <input type="submit" value="Berechnen">
    </form>


	
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