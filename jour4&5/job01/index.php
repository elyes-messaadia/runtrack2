<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET</title>
</head>
<body>

<form method="GET" action="index.php">
    <label for="field1">Champ 1:</label>
    <input type="text" id="field1" name="field1"><br>

    <label for="field2">Champ 2:</label>
    <input type="text" id="field2" name="field2"><br>

    <label for="field3">Champ 3:</label>
    <input type="text" id="field3" name="field3"><br>

    <input type="submit" value="Envoyer">
</form>

<?php
// Vérifier si des arguments GET sont envoyés
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    // Compter le nombre d'arguments GET
    $nombreArguments = count($_GET);

    // Afficher le nombre d'arguments GET
    echo "Le nombre d'arguments GET envoyé est : " . $nombreArguments;
}
?>

</body>
</html>
