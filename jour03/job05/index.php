<!DOCTYPE html>
<html>
<head>
    <title>Compter les voyelles et les consonnes</title>
</head>
<body>

<?php
// Définition de la chaîne de caractères
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Initialisation du dictionnaire
$dic = array("consonnes" => 0, "voyelles" => 0);

// Définition des voyelles
$voyelles = "aeiouyAEIOUY";

// Parcourir la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (ctype_alpha($char)) { // Vérifier si le caractère est une lettre
        if (strpos($voyelles, $char) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>

<!-- Affichage des résultats dans un tableau HTML -->
<table border="1">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["voyelles"]; ?></td>
            <td><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
