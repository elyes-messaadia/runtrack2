<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Maison</title>
</head>
<body>
    <form method="GET" action="">
        <label for="largeur">Largeur:</label>
        <input type="text" id="largeur" name="largeur" required><br><br>
        <label for="hauteur">Hauteur:</label>
        <input type="text" id="hauteur" name="hauteur" required><br><br>
        <input type="submit" value="Soumettre">
    </form>

    <?php
    if (isset($_GET['largeur'], $_GET['hauteur'])) {
        $largeur = (int) $_GET['largeur'];
        $hauteur = (int) $_GET['hauteur'];

        if ($largeur > 0 && $hauteur > 0 && $largeur % 2 == 0) {
            // Afficher le toit
            for ($i = 0; $i < $largeur / 2; $i++) {
                echo '<pre>' . str_repeat(' ', $largeur / 2 - $i - 1) . '/' . str_repeat('_', 2 * $i) . '\\' . '</pre>';
            }

            // Afficher le corps
            for ($j = 0; $j < $hauteur; $j++) {
                echo '<pre>|' . str_repeat(' ', $largeur - 2) . '|</pre>';
            }

            // Afficher la base
            echo '<pre>' . str_repeat('-', $largeur) . '</pre>';
        } else {
            echo "<p>Veuillez entrer des valeurs numériques positives paires pour la largeur et positives pour la hauteur.</p>";
        }
    }
    ?>
</body>
</html>



