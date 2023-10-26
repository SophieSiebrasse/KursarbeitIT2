<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 6</title>
</head>
	<h1>Aufgabe 6</h1>
	<p>Die Dateigröße darf nicht 0 sein. Die Bandbreite darf nicht 0 sein.</p>

	<?php

function pruefeDateiUndBandbreite($dateiGroesse, $bandbreite) {
    if ($dateiGroesse != 0 && $bandbreite != 0) {
        echo "Die Dateigröße und die Bandbreite sind beide nicht 0.";
    } else {
        echo "Fehler: Die Dateigröße oder die Bandbreite ist 0.";
    }
}

// Beispielaufruf
$dateiGroesse = intval(readline("Gib die Dateigröße ein (in Bytes): "));
$bandbreite = intval(readline("Gib die Bandbreite ein (in bps): "));

pruefeDateiUndBandbreite($dateiGroesse, $bandbreite);

?>


<body>
</body>
</html>