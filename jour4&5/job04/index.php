<!-- I think that Youtube should create an on hover mouse overlay to show users information such as the date of creation of their youtube channel (much like discord)
, basically like Twitch does, showing the numbers of their subscribers, viewers overall, their playlists, and the number of videos they have uploaded.
 This would be a great feature for users to see the information of the channel they are watching without having to click on the channel and go to their page. -->

 <!-- m3He8TPr?yK*hmc ors --> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Arguments POST</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h2>Tableau des arguments POST</h2>";
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        foreach ($_POST as $key => $value) {
            echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
