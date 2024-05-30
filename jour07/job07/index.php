<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transformation Form</title>
</head>
<body>

<form method="post" action="">
    <label for="str">Enter text:</label>
    <input type="text" id="str" name="str">
    <br><br>
    <label for="fonction">Choose a transformation:</label>
    <select id="fonction" name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <br><br>
    <button type="submit">Submit</button>
</form>

<?php
function gras($str) {
    return preg_replace_callback('/\b[a-zA-Z]/', function ($matches) {
        return '<b>' . strtoupper($matches[0]) . '</b>';
    }, $str);
}

function cesar($str, $decalage = 2) {
    $result = '';
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $ascii = ord($str[$i]);
        if ($ascii >= 65 && $ascii <= 90) {
            $result .= chr((($ascii - 65 + $decalage) % 26) + 65);
        } elseif ($ascii >= 97 && $ascii <= 122) {
            $result .= chr((($ascii - 97 + $decalage) % 26) + 97);
        } else {
            $result .= $str[$i];
        }
    }
    return $result;
}

function plateforme($str) {
    return preg_replace('/me\b/', 'me_', $str);
}

if (isset($_POST["str"]) && isset($_POST["fonction"])) {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];
    
    switch ($fonction) {
        case 'gras':
            echo gras($str);
            break;
        case 'cesar':
            echo cesar($str);
            break;
        case 'plateforme':
            echo plateforme($str);
            break;
        default:
            echo "Invalid function selected";
    }
}
?>

</body>
</html>
