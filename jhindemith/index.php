<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Seite von Jule Hindemith</title>
</head>

<body>
	<a href="gleichung/gleichung.php">Aufgabe 3 "Gleichung"</a>
	<a href="rechteck/rechteck.php">Aufgabe 4 "Rechteck"</a>
	
	<h1>Das erste Programm</h1>
	<form action ="adresse.php" method="post">  
		<p><input name ="vor">Vorname</p>
		<p><input name ="nach">Nachname</p>
		<p><input type="submit"></p>
	</form>
	
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