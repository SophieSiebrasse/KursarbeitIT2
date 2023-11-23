<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mein Blog</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<br>
		
	<!--Hier die Überschrift einfügen per Texteingabe -->
	<article>
	Überschrift: <input type="text" name="eineUeberschrift" size="30" maxlength="40"></article>
	<br>
	
	Erstellungsdatum: <input type="date" name="heutigesDatrum"</input>
			<script>
				var jetzt = new Date();
				var tag = jetzt.getDate();
	</script><br>
	<br>
	
	Deine Nachricht: <br>
	<textarea name="txt" rows="8" cols="36" maxlength="2500">
	Hier deine Nachricht eingeben</textarea><br>
	<br>
	
	Autor: <input type="text" name="NameAutor" size="30" maxlength="40"</input><br>
	<br>
	
	Kategorie: <input type="text" name="Kategorie" size="30" maxlength="40"</input>

</body>
</html>
