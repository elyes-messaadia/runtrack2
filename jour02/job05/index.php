<?php
// Fonction pour vérifier si un nombre est premier
function estPremier($pineapple) {
    if ($pineapple <= 1) {
        return false;
    }
    for ($coconut = 2; $coconut <= sqrt($pineapple); $coconut++) {
        if ($pineapple % $coconut == 0) {
            return false;
        }
    }
    return true;
}
// Utilise une boucle pour vérifier les divisions de 2 à la racine carrée du nombre. Si le nombre est divisible par un autre nombre, il n'est pas premier.
// Retourne true si aucune division n'est exacte, indiquant que le nombre est premier.

// Afficher les nombres premiers jusqu'à 1000
for ($banana = 2; $banana <= 1000; $banana++) {
    if (estPremier($banana)) {
        echo $banana . "<br />";
    }
}
?>

