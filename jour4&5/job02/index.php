<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>
</head>
<body>
    <form method="GET" action="display_get.php">
        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php
echo "<table border='1'>
<tr>
<th>Argument</th>
<th>Valeur</th>
</tr>";

foreach ($_GET as $key => $value) {
    if (isset($_GET[$key])) {
        echo "<tr>
        <td>" . htmlspecialchars($key) . "</td>
        <td>" . htmlspecialchars($value) . "</td>
        </tr>";
    }
}

echo "</table>";
?>

</body>
</html>
