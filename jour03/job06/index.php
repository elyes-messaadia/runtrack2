<!DOCTYPE html>
<html>
<head>
    <title>Inverser une chaîne de caractères</title>
</head>
<body>

<?php
// Définition de la chaîne de caractères
$str = "Les choses que l'on possède finissent par nous posséder.";

// Initialisation de la variable pour stocker le résultat inversé
$result = "";

// Parcourir la chaîne de caractères à l'envers
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    // Ajouter chaque caractère à la variable résultat
    $result .= $str[$i];
}

// Afficher le résultat
echo $result;
?>

</body>
</html>
