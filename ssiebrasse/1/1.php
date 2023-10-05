<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fallzeitrechner</title>
</head>

<body>
	<?php
	
	echo "<h1> Aufgabe 1 IT2 28.09.23</h1>";
	echo "<p> Erstellen Sie eine fallzeit.php-Seite für die Berechnung der Zeit, die ein Gegenstand benötigt, bis er aus einer Höhe h auf dem Boden aufschlägt.</p>";
	
	//Konstante für die Erdbeschleunigung in m/s²
	define("G", 9.81);
	
	//Höhe festlegen (3 Meter)
	$height = 3;
	
	// Berechnung der Fallzeit 
	$time = sqrt((2 * $height) / G);
	
	echo "<p> Ein Gegenstand benötigt etwa $time Sekunden, um aus einer Höhe von $height Metern auf den Boden zu fallen. < /p>";
	?>

</body>
</html>