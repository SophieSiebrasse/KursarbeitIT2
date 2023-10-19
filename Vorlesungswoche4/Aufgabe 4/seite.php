<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Seiten berechnen</title>
</head>

<body>
	<h1>Aufgabe 4</h1>
	
	<?php

function pruefeSeiten($a, $b) {
    if ($a != 0 && $b != 0) {
        echo "Seite a und Seite b sind beide nicht 0.";
        pruefeQuadrant($a, $b);
    } else {
        echo "Fehler: Seite a oder Seite b ist 0.";
    }
}

function pruefeQuadrant($x, $y) {
    if ($x > 0 && $y > 0) {
        echo "Der Punkt ($x, $y) liegt im ersten Quadranten.";
    } elseif ($x < 0 && $y > 0) {
        echo "Der Punkt ($x, $y) liegt im zweiten Quadranten.";
    } elseif ($x < 0 && $y < 0) {
        echo "Der Punkt ($x, $y) liegt im dritten Quadranten.";
    } elseif ($x > 0 && $y < 0) {
        echo "Der Punkt ($x, $y) liegt im vierten Quadranten.";
    } else {
        echo "Der Punkt ($x, $y) liegt auf einer Achse.";
    }
}

// Beispielaufruf
$seite_a = intval(readline("Gib den Wert für Seite a ein: "));
$seite_b = intval(readline("Gib den Wert für Seite b ein: "));

pruefeSeiten($seite_a, $seite_b);

?>

</body>
</html>