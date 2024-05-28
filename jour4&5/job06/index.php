<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de Nombre Pair ou Impair</title>
</head>
<body>
    <form method="GET" action="">
        <label for="nombre">Entrez un nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    function parse_get_input() {
        $query_string = $_SERVER['QUERY_STRING'];
        $parsed_input = [];
        parse_str($query_string, $parsed_input);
        return $parsed_input;
    }

    $get_data = parse_get_input();

    if (isset($get_data['nombre'])) {
        $nombre = $get_data['nombre'];

        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>
<!-- Look within yourself -->