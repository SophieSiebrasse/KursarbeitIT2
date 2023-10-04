<!DOCTYPE html>
<html>
<head>
    <title>Tankfuellung Berechnung</title>
</head>
<body>
    <h1>Tankfuellung Berechnung</h1>
    
    <?php
    
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
