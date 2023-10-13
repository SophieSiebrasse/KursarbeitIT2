<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< Updated upstream
<title>Berechnung der Tankkosten</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>

<body>
	<h1>Kraftstoffberechnung</h1>
	<?php
		// Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
	
			$menge=doubleval($_POST["menge"]);
			$preisProLiter =doubleval($_POST["kraftstoffart"]);
			$minTankMenge=10;


			if($menge>=$minTankMenge)
			{
				$preis=$menge*$preisProLiter; 
				$ergebnis = "Der Preis beträgt $preis €";

			} else
				{
					$ergebnis = "Die Berechnung konnte nicht durchgeführt werden. Die Menge muss min".$minTankMenge."l betragen";
				}
		}
		
	?>
	
	<form action="tank.php" method="post">	
		<p>
			<label for="menge">Menge:</label>
			<input id="menge" name="menge"> 
		</p>
		<p>
			<label for="kraftstoffart">Kraftstoff:</label> 
         	<select name="kraftstoffart" id="kraftstoffart">
			  <!--- Die Inhalte bspw. einer Dialogliste werden später aus einer Datenbank gefüllt. --->
			  <option value="1.59">Benzin</option>
			  <option value="1.67">Super E10</option>
			  <option value="1.74">Super E5</option>
          	</select>
		</p>
		<p><input type="submit" name="gesendet"</p>
	</form>
	
	<p>
		<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Sonst wird die Berechnung ausgeführt, obwohl noch keine Menge erfasst oder eine Auswahl getroffen wurde.
				Dafür wird der Submit-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				*/
				if(isset($_POST["gesendet"]))
					{
						echo $ergebnis;
					}
		?>
	</p>
	
	<p><a href="tank.php">Neue Berechnung?</a></p>
	
	<?php 
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			include 'tankTabelle_inc.php'; 
			include '../backLink_inc.php'; 
	?>
=======
<title>Tankpreis berechnen</title>
</head>

<body>
	<h1>Tankpreisrechner</h1>
    <form method="post" action="ergebnisse.php">
        <label for="mengeInLitern">Menge in Litern (min. 10 Liter):</label>
        <input type="number" name="mengeInLitern" min="10" required><br>

        <label for="preisProLiter">Preis pro Liter (in Euro):</label>
        <input type="number" step="0.01" name="preisProLiter" required><br>

        <label for="kraftstoffart">Kraftstoffart:</label>
        <select name="kraftstoffart" required>
            <option value="Diesel">Diesel (1.8 Euro/Liter)</option>
            <option value="Super">Super (1.9 Euro/Liter)</option>
            <option value="Benzin95">Benzin 95 (1.85 Euro/Liter)</option>
        </select><br>

        <input type="submit" value="Berechnen">
    </form>
>>>>>>> Stashed changes
</body>
</html>