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
    echo "Fehler: Bitte geben Sie einen gültigen Radius ein.";
}
	
</body>
</html>