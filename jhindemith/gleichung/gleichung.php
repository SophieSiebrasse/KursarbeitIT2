<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Gleichung</title>
</head>

<body>
	<?php

echo "<h1>Aufgabe 3 vom 28. September</h1>";
echo "<p>Schreiben Sie ein Programm für die Berechnung der folgenden mathematischen Funktion: y=a*x^3+b*x^2+c*x+d. Verwenden Sie Variablen, denen Sie vor der Berechnung Werte zuweisen.</p>";

//Zuweisung der Variablen
$a=1;
$b=2;
$c=3;
$x=4;	
echo pow($x,3);
echo pow($x,2);
$y=a*pow(x,3)+b*pow(x,2)+c*x+d;	
echo($y);

?>

</body>
</html>
