<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 5</title>
</head>
	<h1>Aufgabe 5</h1>
	<p>Das Gewicht muss größer 40 und kleiner  150kg sein und die Körpergröße  2.10m nicht überschreiten.</p>

	
<body>
	
	<?php

// Funktion zur Berechnung des BMI
function berechneBMI($gewicht, $groesse) {
    // BMI-Formel: BMI = Gewicht (kg) / (Größe (m) * Größe (m))
    return round($gewicht / ($groesse * $groesse), 2);
}

// Funktion zur Erstellung der Tabelle
function erstelleTabelle() {
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Gewicht [kg]</th>';
    echo '<th>BMI</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Berechne BMI für Gewicht von 65kg bis 75kg in 1kg Schritten und Größe von 1,70m
    for ($gewicht = 65; $gewicht <= 75; $gewicht++) {
        $groesse = 1.70;
        $bmi = berechneBMI($gewicht, $groesse);

        // Füge eine Zeile zur Tabelle hinzu
        echo '<tr class="' . ($gewicht % 2 == 0 ? 'even' : 'odd') . '">';
        echo '<td>' . $gewicht . '</td>';
        echo '<td>' . $bmi . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

// Beispielaufruf für die Bedingungen
$gewicht = 70;
$groesse = 1.80;  // Beispielgröße, du kannst die tatsächliche Größe verwenden

if ($gewicht > 40 && $gewicht < 150 && $groesse <= 2.10) {
    // Bedingungen erfüllt, erstelle die Tabelle
    erstelleTabelle();
} else {
    echo 'Fehler: Die Bedingungen für Gewicht und/oder Körpergröße sind nicht erfüllt.';
}

?>

	
</body>
</html>