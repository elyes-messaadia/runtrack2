<?php
// Définir les dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Afficher le rectangle
for ($recthauteur = 0; $recthauteur < $hauteur; $recthauteur++) {
    for ($rectlargeur = 0; $rectlargeur < $largeur; $rectlargeur++) {
        echo "*&nbsp;&nbsp;";  // Afficher une étoile et des espaces
    }
    echo "<br>";  // Passer à la ligne suivante après chaque ligne
}
?>

