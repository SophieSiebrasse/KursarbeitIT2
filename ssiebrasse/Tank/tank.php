<!DOCTYPE html>
<html>
<head>
    <title>Tankfuellung Berechnung</title>
</head>
<body>
    
    <?php
	
	echo "<h1> Aufgabe 2 IT2 28.09.23</h1>";
	echo "<p> Schreiben ein Programm (tank.php) fuer die Berechnung des Gesamtpreises einer Tankfuellung, wenn eine Menge in Litern ,sowie der Preis in Euro pro Liter bekannt ist.</p>";
    
	// Menge in Litern
    
	$mengeInLitern = 30;

    // Preis pro Liter in Euro
    
	$preisProLiter = 1.70;

    // Gesamtpreis berechnen
    
	$gesamtpreis = $mengeInLitern * $preisProLiter;
    ?>

    <p>Menge in Litern: <?php echo $mengeInLitern; ?> Liter</p>
    <p>Preis pro Liter: <?php echo $preisProLiter; ?> Euro</p>
    <p>Gesamtpreis: <?php echo $gesamtpreis; ?> Euro</p>
</body>
</html>
