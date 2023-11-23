<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
	<?php
// Hier die Datenbankverbindung herstellen (Beispiel: mysqli_connect)

// Beispielabfrage für Blogeinträge
$query = "SELECT * FROM blog_entries ORDER BY entry_date DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<article>";
    echo "<h2>{$row['title']}</h2>";
    echo "<p>{$row['content']}</p>";
    echo "<p>Veröffentlicht am: {$row['entry_date']}</p>";
    echo "</article>";
}

// Hier die Verbindung schließen (Beispiel: mysqli_close)
?>

</body>
</html>
