<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Style</title>
    <?php
    if (isset($_GET['style']) && in_array($_GET['style'], ['style1', 'style2', 'style3'])) {
        echo '<link rel="stylesheet" type="text/css" href="' . htmlspecialchars($_GET['style']) . '.css">';
    }
    ?>
</head>
<body>
    <form method="GET" action="">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <br><br>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
