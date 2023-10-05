<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formular</title>
</head>

<body>
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
	
	
	</form>
</body>
</html>