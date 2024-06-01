<?php
// Création de la chaîne de caractères
$matrix = "Certaines choses changent, et d'autres ne changeront jamais.";

// Initialiser une variable pour stocker la nouvelle chaîne
$newMatrix = "";

// Longueur de la chaîne
$len = strlen($matrix);

// Parcourir la chaîne et construire la nouvelle chaîne
for ($morpheus = 0; $morpheus < $len; $morpheus++) {
    if ($morpheus == $len - 1) {
        // Remplacer le dernier caractère par le premier
        $newMatrix .= $matrix[0];
    } else {
        // Remplacer chaque caractère par le suivant
        $newMatrix .= $matrix[$morpheus + 1];
    }
}

// Afficher la nouvelle chaîne
echo $newMatrix;
?>
