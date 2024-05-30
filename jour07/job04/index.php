<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
        case '%':
            return $a % $b;
        default:
            return "Invalid operation";
    }
}

// Example usage:
echo calcule(5, '+', 3);  // Outputs: 8
echo calcule(5, '-', 3);  // Outputs: 2
echo calcule(5, '*', 3);  // Outputs: 15
echo calcule(5, '/', 3);  // Outputs: 1.6667
echo calcule(5, '%', 3);  // Outputs: 2
?>
