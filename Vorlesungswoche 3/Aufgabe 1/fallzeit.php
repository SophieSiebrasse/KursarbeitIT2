<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fallzeit</title>
</head>
	
<body>
	Aufgabe 1 - Fallzeit
	<p>Berechnung des freies Falls eines Handys</p>
	<p>Wähle einen Planeten aus, auf welchem du die Fallzeit berechnen möchtest.</p>
	<form action="ergebnis.php" method="post">
        <label for="planet">Wähle einen Planeten:</label>
        <select name="planet" id="planet">
            <option value="erde">Erde</option>
            <option value="mond">Mond</option>
            <option value="jupiter">Jupiter</option>
            <option value="mars">Mars</option>
        </select>
        <br>
        <label for="fallhoehe">Fallhöhe (in Metern):</label>
        <input type="number" name="fallhoehe" id="fallhoehe" step="0.01">
        <br>
        <input type="submit" value="Berechnen">
    </form>

</body>
</html>