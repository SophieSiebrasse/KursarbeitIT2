<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tankpreisrechner</title>
</head>

<body>
	<h1>Tankpreis berechnen</h1>
    <form method="post" action="ergebnisse.php">
        <label for="mengeInLitern">Menge in Litern (min. 10 Liter):</label>
        <input type="number" name="mengeInLitern" min="10" required><br>

        <label for="kraftstoffart">Kraftstoffart:</label>
        <select name="kraftstoffart" required>
            <option value="Diesel">Diesel (1.8 Euro/Liter)</option>
            <option value="Super">Super (1.9 Euro/Liter)</option>
            <option value="Benzin95">Benzin 95 (1.95 Euro/Liter)</option>
        </select><br>

        <input type="submit" value="Berechnen">
    </form>
</body>
</html>