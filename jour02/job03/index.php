<?php
for ($laPlateforme = 0; $laPlateforme <= 100; $laPlateforme++) {
    if ($laPlateforme == 42) {
        echo "La Plateforme_<br />";
    } elseif ($laPlateforme >= 0 && $laPlateforme <= 20) {
        echo "<i>$laPlateforme</i><br />";
    } elseif ($laPlateforme >= 25 && $laPlateforme <= 50) {
        echo "<u>$laPlateforme</u><br />";
    } else {
        echo "$laPlateforme<br />";
    // Je ne sais pas vraiment quoi mettre comme commentaire donc voilà
    }
}
?>
