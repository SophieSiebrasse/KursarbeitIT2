<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Gleichung</title>
</head>

<body>
	<h1>Aufgabe 3</h1>
	
	<?php
// Funktion zur Berechnung von Y
function calculateY($x, $a, $b, $c) {
    // Hier die gewünschte Funktion einsetzen, zum Beispiel:
    // return $a * $x + $b;
    return $a * pow($x, 2) + $b * $x + $c;
}

// Überprüfen, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten erfassen
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $x_from = $_POST["x_from"];
    $x_to = $_POST["x_to"];

    // HTML-Header
    echo "<!DOCTYPE html>
    <html lang='de'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='styles.css'>
        <title>Ergebnisse</title>
    </head>
    <body>";

    // Tabelle für Ergebnisse
    echo "<table>
            <tr>
                <th>Y</th>
                <th>X</th>
            </tr>";

    // Schleife für Werte von x(von) bis x(bis)
    for ($x = $x_from; $x <= $x_to; $x++) {
        $y = calculateY($x, $a, $b, $c);
        echo "<tr>
                <td>$y</td>
                <td>$x</td>
              </tr>";
    }

    // Ende der Tabelle und HTML-Body
    echo "</table>
          </body>
          </html>";
} else {
    // HTML-Formular für Eingabe
    echo "<!DOCTYPE html>
    <html lang='de'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Funktionswerte berechnen</title>
    </head>
    <body>
        <form method='post' action=''>
            <label for='a'>Koeffizient a:</label>
            <input type='text' name='a' required><br>
            
            <label for='b'>Koeffizient b:</label>
            <input type='text' name='b' required><br>

            <label for='c'>Koeffizient c:</label>
            <input type='text' name='c' required><br>

            <label for='x_from'>Startwert von X:</label>
            <input type='text' name='x_from' required><br>

            <label for='x_to'>Endwert von X:</label>
            <input type='text' name='x_to' required><br>

            <input type='submit' value='Berechnen'>
        </form>
    </body>
    </html>";
}
?>

</body>
</html>