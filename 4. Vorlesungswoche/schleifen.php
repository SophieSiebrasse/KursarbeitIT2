<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Schleifen</title>
</head>

<body>
	<h1>Schleifen</h1>
	
	<table border=1">
	<?php
		for($zeilenzaehler=1; $zeilenzaehler<=10; $zeilenzaehler++)
		{
			echo "<tr>";
			for($spaltenzaehler=1; $spaltenzaehler<=10;
			   $spaltenzaehler++)
			{
				$ergebnis=$zeilenzaehler*$spaltenzaehler;
				echo "<td>";
				echo $ergebnis;
				echo "</td>";
			}
			echo "</tr>";
		}
	?>
	</table>
					
	<h1> Aufgaben Vorlesungswoche 4</h1>

	<a href="Aufgabe 1/fallzeit.php" >Aufgabe 1</a>
	
	<a href="Aufgabe 2/tank.php" >Aufgabe 2</a>;
	
	<a href="Aufgabe 3/gleichung.php" >Aufgabe 3</a>;
	
	<a href="Aufgabe 4/seite.php" >Aufgabe 4</a>;
	
	<a href="Aufgabe 5/bmi.php" >Aufgabe 5</a>;
	
	<a href="Aufgabe 6/dateigroesse.php" >Aufgabe 6</a>;
					
</body>
</html>