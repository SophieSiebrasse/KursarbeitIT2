<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Würfel Berechnung</title>
	
</head>
<body>
	<h1>Würfelberechnung</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Werte aus dem Formular erhalten
        $kantenlaenge = $_POST["kantenlaenge"];

        // Überprüfen, ob die Kantenlänge größer als 0 ist
        if ($kantenlaenge > 0) {
            // Berechnungen durchführen
            $volumen = pow($kantenlaenge, 3);
            $oberflaeche = 6 * pow($kantenlaenge, 2);
            $mantelflaeche = $oberflaeche;

            // Ergebnisse ausgeben
            echo "<p>Volumen: $volumen</p>";
            echo "<p>Oberfläche: $oberflaeche</p>";
            echo "<p>Mantelfläche: $mantelflaeche</p>";
        } else {
            // Fehlermeldung ausgeben
            echo "<p>Die Kantenlänge muss größer als 0 sein.</p>";
        }
    }
    ?>

    <!-- HTML-Formular erstellen -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Kantenlänge: <input type="text" name="kantenlaenge"><br>
        <input type="submit" value="Berechnen">
    </form>
	
	<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
	
</body>
</html>
