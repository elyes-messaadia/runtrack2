<!DOCTYPE html>
<html>
<head>
    <title>Remplacer les caractères d'une chaîne</title>
</head>
<body>

<?php
// Définition de la chaîne de caractères
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Initialisation de la variable pour stocker le résultat
$result = "";

// Obtenir la longueur de la chaîne
$length = strlen($str);

// Parcourir la chaîne de caractères
for ($i = 1; $i < $length; $i++) {
    // Ajouter le caractère suivant à la variable résultat
    $result .= $str[$i];
}

// Ajouter le premier caractère à la fin de la chaîne résultante
$result .= $str[0];

// Afficher le résultat
echo $result;
?>

</body>
</html>
