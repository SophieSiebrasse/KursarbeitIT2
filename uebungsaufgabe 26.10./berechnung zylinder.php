<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung Zylinder</title>
</head>

<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $r = $_POST["r"];
        $h = $_POST["h"];

        if ($r > 0 && $h > 0) {
            // Berechnungen
            $volumen = M_PI * pow($r, 2) * $h;
            $oberflaeche = 2 * M_PI * $r * ($r + $h);
            $mantelflaeche = 2 * M_PI * $r * $h;

            echo "Volumen: " . $volumen . "<br>";
            echo "Oberfläche: " . $oberflaeche . "<br>";
            echo "Mantelfläche: " . $mantelflaeche . "<br>";
        } else {
            echo "Die Werte müssen größer als Null sein.";
        }
    }
    ?>
</body>
</html>