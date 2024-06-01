<?php
// Création de la chaîne de caractères
$bladerunner = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne et afficher seulement un caractère sur deux
for ($instant = 0; $instant < strlen($bladerunner); $instant += 2) {
    echo $bladerunner[$instant];
}
?>

