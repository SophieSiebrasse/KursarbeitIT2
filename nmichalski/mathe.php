<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Matheaufgabe</title>
</head>

<body>
	
	<h1>Matheaufgabe</h1>
	
		<p><input name="zahl">Zahl 1</p>
	<p><input name="zahl">Zahl 2</p>
	<p><input type="submit"></p>
	

	<?php
	// Zahlen aus Mathe übernehmen
	$zahl1 = $_POST["z1"];
	$zahl2 = $_POST["z2"];
	
	//Zeichenketten in Zahlen umwandeln
	$zahl1=intval($zahl1);
	$zahl2=intval($zahl2);
	
	//Rechnung durchführen
	$ergebnis=$zahl1+$zahl2;
	// Ergebnis azsgeben
	echo $zahl1 + $zahl2 = ".$ergebnis";
	
	
	
	// Verzweigung mit if
	/* Vergleichsoperatoren
	== gleich
	!= ungleich
	< kleiner als
	> größer als
	>= größer als oder gleich
	<= kleiner als oder gleich
	
	*/
	if($zahl1>=5)
		{
		// Rechnung durchführen
		$ergebnis=$zahl1+$zahl2;
		// Ergebnis ausgeben
		echo " $zahl1 + $zahl2 ";
		}
			else
			{
				echo 
			}
	
	?>
	
	
	
</body>
</html>