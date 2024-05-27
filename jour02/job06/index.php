<?php
$largeur = 20; // Vous pouvez modifier cette valeur pour changer la largeur du rectangle
$hauteur = 10; // Vous pouvez modifier cette valeur pour changer la hauteur du rectangle

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur; $j++) {
        echo "*";
    }
    echo "<br />";
}
?>
