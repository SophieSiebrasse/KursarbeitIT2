<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Schleifen</title>
</head>

<body>
	<h1>Schleifen</h1>
	
	
	
	<?php
		for($schleifenzaehler=1;
		   $schleifenzaehler<=100;
		   $schleifenzaehler=$schleifenzaehler*4)
		{
			echo "Zeile 
			$schleifenzaehler<br>";
		}
	?>
	
</body>
</html>