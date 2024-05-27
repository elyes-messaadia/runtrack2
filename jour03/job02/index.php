<!DOCTYPE html>
<html>
<head>
    <title>Afficher un caractère sur deux</title>
</head>
<body>

<?php
// Définition de la chaîne de caractères
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Initialisation de la variable pour stocker le résultat
$result = "";

// Parcourir la chaîne de caractères
for ($i = 0; $i < strlen($str); $i += 2) {
    // Ajouter le caractère courant à la chaîne de résultat
    $result .= $str[$i];
}

// Afficher le résultat
echo $result;
?>

</body>
</html>
