<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mathe</title>
</head>

<body>
	<?php
	// Zahlen aus Mathe übernehmen
	$zahl1 = $_POST["z1"];
	$zahl2 = $_POST["z2"];
	
	$minWert1 = 5;
	$minWert2 = 5;
	
	//Zeichenketten in Zahlen umwandeln
	$zahl1=intval($zahl1);
	$zahl2=intval($zahl2);
	
	
	// Verzweigungen mit if
	/* Vergleichsoperatoren
		== gleich
		!= ungleich
		< kleiner als
		> größer als
		>= größer als oder gleich
		<= kleiner als oder gleich
	*/
	if($zahl1>=$minWert1 && $zahl2>=$minWert2)
		{
		// Rechnung durchführen
			$ergebnis=$zahl1+$zahl2;
			// Ergebnis ausgeben
			echo " $zahl1 + $zahl2 = ".$ergebnis;
		}
			else
				{
					echo "Zahl 1 muss größer $minWert1 sein und Zahl 2 muss größer gleich $minWert2 sein.";
				}
	
	
	?>
</body>
</html>
