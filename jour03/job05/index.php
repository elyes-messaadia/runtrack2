<?php
// Création de la chaîne de caractères
$str = "On nest pas le meilleur quand on le croit mais quand on le sait";

// Initialiser le dictionnaire pour stocker le nombre de voyelles et de consonnes
$dic = ["consonnes" => 0, "voyelles" => 0];

// Définir les voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcourir la chaîne et compter les voyelles et consonnes
for ($andy = 0; $andy < strlen($str); $andy++) {
    $char = $str[$andy];
    if (ctype_alpha($char)) { // Vérifie si le caractère est une lettre
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Afficher les résultats dans un tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Voyelles</th><th>Consonnes</th></tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr>";
echo "</tbody>";
echo "</table>";
?>

