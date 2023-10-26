<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Wertetabelle</title>
</head>

<body>
	
	<?php
include 'tabelle.php';
$radius = $_POST['radius'];
$kugelWerte = berechneKugel($radius);
if ($kugelWerte) {
    erstelleTabelle($kugelWerte);
} else {
    echo "Fehler: Der Radius muss größer als 0 sein.";
}
	
</body>
</html>