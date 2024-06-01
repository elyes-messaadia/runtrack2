<?php
// Création de la chaîne de caractères
$HAL = "I'm sorry Dave I'm afraid I can't do that";

// Définir les voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// Parcourir la chaîne et afficher uniquement les voyelles
for ($parcourir = 0; $parcourir < strlen($HAL); $parcourir++) {
    if (in_array($HAL[$parcourir], $voyelles)) {
        echo $HAL[$parcourir];
    }
}
?>
