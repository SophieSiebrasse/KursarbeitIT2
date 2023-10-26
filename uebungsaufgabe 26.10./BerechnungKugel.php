<!DOCTYPE html>
<html>
<head>
    <title>Kugelberechnung</title>
</head>
<body>
    <h1>Kugelberechnung</h1>

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
                    <th>Parameter</th>
                    <th>Wert</th>
                </tr>
                <tr>
                    <td>Radius</td>
                    <td><?php echo $radius; ?></td>
                </tr>
                <tr>
                    <td>Volumen</td>
                    <td><?php echo $volumen; ?></td>
                </tr>
                <tr>
                    <td>Oberfläche</td>
                    <td><?php echo $oberflaeche; ?></td>
                </tr>
            </table>
    <?php
        } else {
            echo "Fehler: Bitte geben Sie einen gültigen Radius ein (größer als 0).";
        }
    } else {
    ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="radius">Radius:</label>
            <input type="number" name="radius" step="0.01" required>
            <input type="submit" value="Berechnen">
        </form>
    <?php
    }
    ?>

</body>
</html>
