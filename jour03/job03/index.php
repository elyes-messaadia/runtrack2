<!DOCTYPE html>
<html>
<head>
    <title>Afficher uniquement les voyelles</title>
</head>
<body>

<?php
// Définition de la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définition des voyelles
$voyelles = "aeiouAEIOU";

// Initialisation de la variable pour stocker le résultat
$result = "";

// Parcourir la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifier si le caractère courant est une voyelle
    if (strpos($voyelles, $str[$i]) !== false) {
        // Ajouter la voyelle à la chaîne de résultat
        $result .= $str[$i];
    }
}

// Afficher le résultat
echo $result;
?>

</body>
</html>