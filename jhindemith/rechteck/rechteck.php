<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
	<?php

echo "<h1>Aufgabe 4 vom 28. September</h1>";
echo "<p>Schreiben Sie ein Programm (rechteck.php), welches die Diagonale, die Fläche und den Umfang eines Rechtecks der Seitenlänge a und b berechnet. Verwenden Sie ebenfalls wieder Variablen für die Seitenlängen.</p>";

//Zuweisung der Variablen für die Seitenlängen
$seitenlaengeA=5;
$seitenlaengeB=10;
$diagonale=($seitenlaengeA^2)+($seitenlaengeB^2); 

echo pow($seitenlaengeA,2);
echo pow($seitenlaengeB,2);
$diagonale=pow($seitenlaengeA,2)+pow($seitenlaengeB,2);	
echo($diagonale);
$flaeche=$seitenlaengeA*$seitenlaengeB;
echo($flaeche);
$umfang=(2*$seitenlaengeA)+(2*$seitenlaengeB);
echo($umfang);

?>

</body>
</html>