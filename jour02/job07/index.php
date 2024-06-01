<?php
// Définir la hauteur du triangle
$hauteur = 5;

// Afficher le triangle vide avec des bordures
for ($triborder = 0; $triborder < $hauteur; $triborder++) {
    // Afficher les espaces avant les caractères de bordure
    for ($trispace = $hauteur - $triborder - 1; $trispace > 0; $trispace--) {
        echo "&nbsp;&nbsp;";
    }

    // Afficher les caractères de bordure et les espaces intérieurs
    for ($trichar = 0; $trichar <= $triborder; $trichar++) {
        if ($trichar == 0 || $trichar == $triborder || $triborder == $hauteur - 1) {
            echo "*"; // Caractères de bordure
        } else {
            echo "&nbsp;&nbsp;"; // Espaces intérieurs
        }
        // Ajouter un espace entre les caractères de bordure pour l'alignement
        if ($trichar < $triborder) {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>
