<!DOCTYPE html>
<html>
<head>
    <title>Kugelberechnung mit Wertetabelle</title>
	 <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
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
    <h1>Kugelberechnung mit Wertetabelle</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST["radius"];

        // Überprüfen, ob der eingegebene Radius gültig ist
        if ($radius > 0) {
            $volumen = (4/3) * M_PI * pow($radius, 3);
            $oberflaeche = 4 * M_PI * pow($radius, 2);
    ?>
            <h2>Ergebnisse:</h2>
            <table>
                <tr>
                    <th>Radius</th>
                    <th>Volumen</th>
                    <th>Oberfläche</th>
                </tr>
                <?php
                for ($r = 0.1; $r <= $radius; $r += 0.1) {
                    $v = (4/3) * M_PI * pow($r, 3);
                    $o = 4 * M_PI * pow($r, 2);
                    echo "<tr><td>$r</td><td>$v</td><td>$o</td></tr>";
                }
                ?>
            </table>
    <?php
        } else {
            echo "Fehler: Bitte geben Sie einen gültigen Radius ein (größer als 0).";
        }
    } else {
    ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="radius">Radius:</label>
            <input type="number" name="radius" step="0.1" required>
            <input type="submit" value="Berechnen">
        </form>
    <?php
    }
    ?>

</body>
</html>
