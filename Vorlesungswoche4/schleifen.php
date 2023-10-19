<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Schleifen</title>
</head>

<body>
	<?php
		function add($z1,$z2)
		{
			$ergebnis=$z1+$z2;
			return $ergebnis; //Variable wird zurückgegeben
		}
	
	
	function trennlinie($anzahlZeichen,$zeichen)
	{
		echo "<p>";
		for($i=1;$i<=$anzahlZeichen;$i++)
		{

			echo $zeichen;
		}
		echo "</p>";
	}
	
	
	?>
	
	<h1>Schleifen</h1>
	<p>===========</p>
	
	<table border=1">
					
		<?php
				echo(add(2,3));	
					?>
	<?php
					
		for($zeilenzaehler=1; $zeilenzaehler<=10; $zeilenzaehler++)
		{
			echo "<tr>";
			for($spaltenzaehler=1; $spaltenzaehler<=10;
			   $spaltenzaehler++)
			{
				$ergebnis=$zeilenzaehler*$spaltenzaehler;
				echo "<td>";
				echo $ergebnis;
				echo "</td>";
			}
			echo "</tr>";
		}
	?>
	</table>
				<?php trennlinie(30,"=")?>
					
	<?php trennlinie(34,"-")?>
	<?php trennlinie(54,"+")?>
	<?php trennlinie(777,"m")?>
	<p>===========</table>
					
</body>
</html>