<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Zylinder</title>
</head>

<body>
	<h1>Objektberechnung</h1>
    <form method="post" action="berechnung zylinder.php">
        <label for="l">Länge:</label>
        <input type="number" name="l" required min="0"><br>
        
        <label for="b">Breite:</label>
        <input type="number" name="b" required min="0"><br>
        
        <label for="h">Höhe:</label>
        <input type="number" name="h" required min="0"><br>
        
        <input type="submit" value="Berechnen">
    </form>
</body>
</html>