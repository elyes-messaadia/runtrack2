<!DOCTYPE html>
<html>
<head>
    <title>Vérification Paire ou Impaire</title>
</head>
<body>

<?php
// Tableau contenant les nombres
$numbers = array(200, 204, 173, 98, 171, 404, 459);

// Parcourir le tableau
foreach ($numbers as $number) {
    // Vérifier si le nombre est pair ou impair
    if ($number % 2 == 0) {
        echo "$number est paire<br />";
    } else {
        echo "$number est impaire<br />";
    }
}
?>

</body>
</html>
