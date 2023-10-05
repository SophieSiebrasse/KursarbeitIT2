<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Matheaufgabe</title>
</head>

<body>
	<h1>Ergebnis</h1>
	<?php
		//Zahlen aus mathe.php übernehmen
		$zahl1 = $_POST["z1"];
		$zahl2 = $_POST["z2"];
		//Zeichenketten umwandeln in Zahlen
		$zahl1 = intval($zahl1);
		$zahl2 = intval($zahl2);
	
		//Verzweigungen mit if (das "else" ist optional. Nicht nötig, wenn sonst nichts passiert wenn Bedingung mit erfüllt)
		/*Vergleichsoperatoren
			== gleich (ja, 2 Gleichheitszeichen!)
			!= ungleich
			< kleiner als
			> größer als
			>= größer als oder gleich
			<= kleiner als oder gleich
		*/
		/*
		if($zahl1>=5)
			{
			//Rechnung durchführen
			$ergebnis=$zahl1+$zahl2;
				//Ergebnis ausgeben
				echo "$zahl1+$zahl2=".$ergebnis;
			}
				else
					{
					echo "Zahl 1 muss größer 5 sein";
					}
				
			*/		
	
		//Rechnung durchführen
		$ergebnis=$zahl1+$zahl2;
		//Ergebnis ausgeben
		echo "$zahl1+$zahl2=".$ergebnis;
	
		
	?>
</body>
</html>