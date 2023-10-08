<?php
		// Umwandlung von Zeichenketten in Zahlenwerte
		$a = 435;
		echo intval($a)."<br>";
		// Variable b wird angelegt und die Zeichenkette 22.6 zugewiesen
		$b="22.6";
		// Inhalt von b wird in Integerwert umgewandelt
		echo intval($b)."<br>";
		// Inhalt von b wird in doublewert umgewandelt
		echo doubleval($b)."<br>";
		// Kenntnisse werden im zweiten Programm benötigt
	?>
	
	<h1>Zweites Programm: Addition zweier Zahlen</h1>
	<form action ="ergebnis.php" method="post">
		<p><input name="z1">Zahl 1</p>
		<p><input name="z2">Zahl 2</p>
		<p><input type="submit"></p>
	</form>
	