<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET et Affichage</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form action="index.php" method="get">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_GET)) {
        echo '<h2>Arguments et valeurs GET</h2>';
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        foreach ($_GET as $argument => $valeur) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($argument) . '</td>';
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>
