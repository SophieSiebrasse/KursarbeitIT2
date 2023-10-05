<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Bandbreite</title>
</head>

<body>
<?php
echo "<h1>Aufgabe 6 vom 28. September</h1>";
echo "<p>Schreiben Sie ein Programm, welches die Zeit berechnet, die eine Dateiübertragung in Anspruch nimmt, wenn die Dateigröße sowie die Bandbreite gegeben ist. Entscheiden Sie eigenständig, in welcher Einheit die Werte angegeben werden müssen.</p>";

//Zuweisung der Variablen
$dateigroesseByte=70;
$bandbreiteBit=2000;
	
$zeit=bandbreiteBit*dateigroesseByte;
echo($zeit);
	
?>
	
	
</body>
</html>