<?php
for ($banana = 1; $banana <= 100; $banana++) {
    $output = "";

    // Calcul des résidus une fois
    $divisibleBy3 = ($banana % 3 == 0);
    $divisibleBy5 = ($banana % 5 == 0);

    // Utilisation de switch pour déterminer le contenu de $output
    switch (true) {
        case ($divisibleBy3 && $divisibleBy5):
            $output = "FizzBuzz";
            break;
        case ($divisibleBy3):
            $output = "Fizz";
            break;
        case ($divisibleBy5):
            $output = "Buzz";
            break;
        default:
            $output = $banana;
            break;
    }

    // Affichage du résultat
    echo $output . "<br />";
}
?>


