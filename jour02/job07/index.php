<?php
$hauteur = 5; // Vous pouvez modifier cette valeur pour changer la hauteur du triangle

for ($i = 1; $i <= $hauteur; $i++) {
    // Afficher les espaces avant les caractères
    for ($j = $hauteur - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    // Afficher les caractères du triangle
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        if ($i == $hauteur) {
            echo "_";
        } elseif ($k == 1 || $k == (2 * $i - 1)) {
            echo "/";
        } elseif ($i == 1) {
            echo "^";
        } else {
            echo "&nbsp;";"&nbsp;";"&nbsp;";
        }
    }
    // Retour à la ligne après chaque ligne du triangle
    /*
    $width = 20;
    $height = 10;

    for ($J = 0; $J < $height; $J++) {
        echo "|";
        if ($J == 0 || $J == $height - 1) {
            for ($i = 0; $i < $width; $i++) {
                echo "--";
            }
        } else {
        
        for ($j = 0; $j + 1 < $width - 1; $j++) {
            echo "   ";
        }

        }
        echo "|";
        echo "<br />";
    }


    $variableespaceavant         /$variable espace central \<br>
$variableespaceavant        /$variable espace central \<br>
       /
      /
     /
    /
   /
  /
 /
/
________$variable pied__________________

$variableespaceavant = 9 => moins 1
$variable espace central = 0 plus 2 ($nbsp;)

$variable pied = 
if
$varcar = " "
elseif hauteur =10
$varcar = "_";

         /\
        /echo $varcar\
       /    \
      /      \
     /        \
    /          \
   /            \
  /              \
 /                \
/__________________\

$hauteur = 10 (fin counter)
$counter = 0 (pour la boucle)
$largeur = 20
if (counter = 0 || counter = 9 {
--------------------<br> (echo 20 fois "-" (boucle)) + <br>
}
else{
echo "|" . " " fois 18 . "|<br>" (il le fera 8 fois car  c'est annulé quand le counter est égal à 0 et à 9)

--------------------
|                  |
|                  |
|                  |
|                  |
|                  |
|                  |
|                  |
|                  |
--------------------
    */
    echo "<br />";
}
?>