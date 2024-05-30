<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Test the function with true and false
bonjour(true);  // Outputs: Bonjour
bonjour(false); // Outputs: Bonsoir
?>
