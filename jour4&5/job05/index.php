<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    function parse_post_input() {
        $raw_input = file_get_contents('php://input');
        $parsed_input = [];
        parse_str($raw_input, $parsed_input);
        return $parsed_input;
    }

    $post_data = parse_post_input();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = isset($post_data['username']) ? $post_data['username'] : '';
        $password = isset($post_data['password']) ? $post_data['password'] : '';

        if ($username === 'John' && $password === 'Rambo') {
            echo "<p>C’est pas ma guerre</p>";
        } else {
            echo "<p>Votre pire cauchemar</p>";
        }
    }
    ?>
</body>
</html>
