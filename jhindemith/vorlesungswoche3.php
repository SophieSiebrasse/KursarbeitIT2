<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Vorlesungswoche 3</title>
</head>

<body>
	Aufgabe 1 - Fallzeit
	<p>Berechnung des freies Falls eines Handys - Version 1</p>
	<p><input name ="planet">Erde, Mond, Mars oder Jupiter</p>
	<?php
		// Dies ist ein Kommentar.
	
		
		/* Ein mehrzeiliger Kommentar, 
		der wieder mit einen Sternchen gefolgt vom Schrägstrich geschlossen werden muss.
		*/
		// Definition der benötigten Variablen
		$hoehe=15;
	    const fallbeschleunigungErde = 9.81; // Definition einer Konstanten. Es wird kein $-Zeichen vorangestellt.
		const fallbeschleunigungMond = 1.62;
		const fallbeschleunigungMars = 3.69;
		const fallbeschleunigungJupiter = 24.79;
			
		if (hoehe>=15)
			{
				echo (sqrt((2*$hoehe)/(fallbeschleunigungErde))); // Berechnung und Ausgabe	
			}
				else
					{
					echo "Die Höhe muss mindestens 15m betragen";
					}
		
	
	?>
	
	Aufgabe 2 - Tank
	<p>Berechnung der Tankkosten</p>
	<?php
		// Dies ist ein Kommentar.
		
		/* Ein mehrzeiliger Kommentar, 
		der wieder mit einen Sternchen gefolgt vom Schrägstrich geschlossen werden muss.
		*/
		// Definition der benötigten Variablen 
	
		$liter=60;
		$preis=1.53;
		// Optional mit Mehrwertsteuer bspw. 19 %
		$mwst=0.19;  
		$gesamt = $liter*$preis; // Berechnung und Speicherung in einer Variablen
		echo ($gesamt); //  Ausgabe
		echo "<br>"; // Ausgabe eines HTML-Elements für den Zeilenumbruch
		echo ($gesamt+($gesamt*$mwst)); // Ausgabe Gesamt plus MwST	
	?>
	
	Aufgabe 3 - Gleichung
	<p>Lineares Gleichungssystem - Version 1</p>
	<math></math>
	<?php
		// Dies ist ein Kommentar.
		
		/* Ein mehrzeiliger Kommentar, 
		der wieder mit einen Sternchen gefolgt vom Schrägstrich geschlossen werden muss.
		*/
		// Definition der benötigten Variablen für die Gleichung y=a*x3+b*x2+c*x+d
	
		$a=1;
		$b=2;
		$c=3;
		$d=4;
		$x=1;
	    
		echo ($a*pow($x,3)+$b*pow($x,2)+$c*$x+$d); // Berechnung und Ausgabe
		
	?>
	
	Aufgabe 4 - Rechteck
	<p>Rechteckberechnung</p>
	<?php
		// Dies ist ein Kommentar.
		
		/* Ein mehrzeiliger Kommentar, 
		der wieder mit einen Sternchen gefolgt vom Schrägstrich geschlossen werden muss.
		*/
		// Definition der benötigten Variablen für die Gleichung 
	
		$hoehe=60;
		$breite=1.53;
		$umbruch="<br>";
		
		// Berechnung des Umfangs  
		$umfang = (2*$breite)+(2*$hoehe);
		// Ausgabe des Umfangs
		echo "Umfang: ".$umfang;
		echo $umbruch; // Zeilenumbruch, damit die Zahlen nicht hintereinander stehen
		
		// Berechnung der Fläche
		$flaeche = $breite*$hoehe;
		// Ausgabe der Fläche
		echo "Fläche: ".$flaeche;
		echo $umbruch; // Zeilenumbruch
	
		// Berechnung der Diagonalen
		$diagonale = sqrt(pow($breite,2)+pow($hoehe,2));
		// Ausgabe der Diagonalen
		echo "Diagonale: ".$diagonale;
		echo $umbruch; // Zeilenumbruch
	?>
	
	Aufgabe 5 - BMI
	<P>BMI-Berechnung</P>
	<?php
	// BMI-Formel = Körpergewicht (in kg) geteilt durch Körpergröße (in m) zum Quadrat
	
	$koerpergewicht = 70; // Angabe in kg
	$koerpergroesse = 1.70; // Angabe in m
	
	$bmi = $koerpergewicht/pow($koerpergroesse,2); 
	echo "Ihr BMI beträgt: ".$bmi;
	?>
	
	Aufgabe 6 - Bandbreite
	<p>Berechnung von Übertragungszeiten V2</p>
	<?php
		$bandbreite = 50; // Einheit kBit/s
		$datenmenge = 500;	// Einheit in MB
		$bitproByte = 8;
		$mbProKb= 1000; // MB pro KB
		$byteProKbyte = 1000; // Byte pro KByte
		$bitProByte = 8; // 8 Bit pro Byte
		$bandbreiteNormiert=$bandbreite/1000; // Nur für die Anzeige im Ergebnistext
	
		// Berechnung der Menge an Daten in Bit
		$datenmengeInBit = $datenmenge*$mbProKb*$byteProKbyte*$bitProByte;
		// Berechnung der Übertragungszeit
		$uebertragungszeit = $datenmengeInBit / ($bandbreite*1000);
		// Ausgabe des Ergebnisses in Textform.
		echo "<p>Die Übertragungszeit von $datenmenge MB bei einer Bandbreite von $bandbreite kBit/s beträgt $uebertragungszeit Sekunden.</p>";
	
		$uebertragungsZeitInStunden = $uebertragungszeit/3600; // Zeit geteilt durch Sekunden pro Stunde
		echo"<p>Ergebnis in Stunden: $uebertragungsZeitInStunden</p>";
	?>
</body>
</html>