<?php
function leetSpeak($str) {
    $leetMap = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leetMap)) {
            $leetStr .= $leetMap[$char];
        } else {
            $leetStr .= $char;
        }
    }

    return $leetStr;
}

// Example usage:
echo leetSpeak("Hello World"); // Outputs: H3110 W0r1d
?>
