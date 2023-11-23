<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Seite von Nina Michalski</title>
</head>

<body>
	<a href="bmi/bmi.php" >Aufgabe 5: BMI</a> <br>
	<a href="bandbreite/bandbreite.php" >Aufgabe 6: Bandbreite</a> <br>
	<a href="uebungsaufgabe 23.11.23/index.php">Übungsaufgabe 23.11.23</a>
	
	
	<h1>Das erste Programm</h1>
	<form action="../adresse.php" method="post">
		<p><input name="vor">Vorname</p>
		<p><input name="nach">Nachname</p>
		<p><input type="submit"></p>
	</form>
	<?php
		$a = 435;
		echo intval($a)."<br>";
	
	$b="22.6";
	echo intval($b)."<br>";
	echo doubleval($b)."<br>";
	
	?>
	

	   
	<h1>Die Matheaufgabe</h1>
	<p>Gebe zwei Zahlen in die Felder ein und adddiere diese. Prüfe ob du richtig gerechnet hast, indem du auf "Senden" klickst</p>
	<form action="ergebnis.php" method="post">
		<p><input zahl="z1">Zahl 1</p>
		<p><input zahl="z2">Zahl 2</p>
		<p><input type="submit"></p>
	</form>
	
	<?php
		$a = 435;
		echo intval($a)."<br>";
	
		$b="22.6";
		echo intval($b)."<br>";
		echo doubleval($b)."<br>";
	
	
	?>
</body>
</html>