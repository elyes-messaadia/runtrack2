<!-- <?php
// for ($i = 0; $i <= 1337; $i++) {
//     if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
//         continue; // Sauter ces nombres
//     }
//     echo $i . "<br />";
// }
?> -->

<?php
// Liste des nombres à exclure
$exclusions = [26, 37, 88, 1111, 3233];

for ($leet = 0; $leet <= 1337; $leet++) {
    if (in_array($leet, $exclusions)) {
        continue; // Passer au prochain nombre si le nombre est dans la liste des exclusions
    }
    echo "$leet<br />";
}
?>
