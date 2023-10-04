<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
</head>

<body>
<?php
echo "<h1>Aufgabe 5 vom 28. September</h1>";
echo "<p>Schreiben Sie ein Programm, für die Berechnung des Bodymaß-Index. BMI-Formel=Körpergewicht geteilt durch Körpergröße zum Quadrat."
	
//Zuweisung der Variablen
	
$koerpergewichtKg=70;
$koerpergroesseM=165;
	
echo pow($koerpergroesseM,2);
$bmi=koerpergewichtKg/pow ($koerpergroesseM,2);
	
?>
	
</body>
</html>