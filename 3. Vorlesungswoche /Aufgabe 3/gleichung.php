<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Gleichung berechnen</title>
</head>

<body>
	<?php
	// Werte für a, b, c und d festlegen
	$a = 1;
	$b = 2;
	$c = 3;
	$d = 4;

	// Eingabewert für x festlegen
	$x = 5;

	// Berechnung der Funktion
	$y = $a * pow($x, 3) + $b * pow($x, 2) + $c * $x + $d;

	// Das Ergebnis in eine Variable speichern
	$result = "Für x = $x ergibt sich y = $y";

	// Ergebnis an ergebnis.php weiterleiten
	header("Location: ergebnis.php?result=" . urlencode($result));
	?>
	
</body>
</html>
