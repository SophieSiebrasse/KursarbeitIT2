<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 4</title>
</head>
	
	<h1>Aufgabe 4</h1>
	<p>Seite a und die Seite b dürfen nicht 0 sein.</p>
	
<?php

function pruefeSeiten($a, $b) {
    if ($a != 0 && $b != 0) {
        echo "Seite a und Seite b sind beide nicht 0.";
    } else {
        echo "Fehler: Seite a oder Seite b ist 0.";
    }
}

// Beispielaufruf
$seite_a = intval(readline("Gib den Wert für Seite a ein: "));
$seite_b = intval(readline("Gib den Wert für Seite b ein: "));

pruefeSeiten($seite_a, $seite_b);

?>


<body>
</body>
</html>