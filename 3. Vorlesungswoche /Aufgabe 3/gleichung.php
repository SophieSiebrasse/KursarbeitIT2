<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Tabelle</title>
</head>
<body>
	<h1>Aufgabe 3</h1>
    <table>
        <thead>
            <tr>
                <th>Y</th>
                <th>X</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($x = -5; $x <= 5; $x++) {
                    $y = pow($x, 2); // Hier kannst du deine eigene Funktion für Y einsetzen

                    // CSS-Klasse für Hervorhebung alternierender Zeilen
                    $rowClass = ($x % 2 == 0) ? 'even' : 'odd';

                    echo "<tr class='$rowClass'>";
                    echo "<td>$y</td>";
                    echo "<td>$x</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
