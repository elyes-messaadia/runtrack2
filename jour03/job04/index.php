<?php
// Création de la chaîne de caractères
$str = "Dans l'espace, personne ne vous entend crier";

// Initialiser le compteur de caractères
$compteur = 0;

// Parcourir la chaîne et compter les caractères
for ($compter = 0; $compter < strlen($str); $compter++) {
    $compteur++;
}

// Afficher le nombre total de caractères
echo "Le nombre de caractères dans la chaîne est : " . $compteur;
?>

