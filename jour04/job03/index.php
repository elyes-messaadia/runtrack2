<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST et Affichage</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label for="age">Âge:</label>
        <input type="text" id="age" name="age"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre_arguments = count($_POST);
        echo "<p>Le nombre d'arguments POST envoyé est : $nombre_arguments</p>";
    }
    ?>
</body>
</html>
