<?php
// Création de la chaîne de caractères
$fincher = "Les choses que l'on possede finissent par nous posseder.";

// Initialiser une variable pour stocker la chaîne inversée
$fincherInverse = "";

// Parcourir la chaîne à l'envers et construire la nouvelle chaîne
for ($david = strlen($fincher) - 1; $david >= 0; $david--) {
    $fincherInverse .= $fincher[$david];
}

// Afficher la chaîne inversée
echo $fincherInverse;
?>

