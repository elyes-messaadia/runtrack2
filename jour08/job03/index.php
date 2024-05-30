<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03</title>
</head>
<body>
    <h3>Job 03</h3>
    <p>Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de session. Afficher l’ensemble des prénoms. Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.</p>
    <form method="post" action="index.php">
        <input type="text" name="prenom" placeholder="Entrez le prénom">
        <button type="submit" name="submit">Envoyer</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
        if (!isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'] = [];
        }
        $_SESSION['prenoms'][] = $prenom;
    }

    if (isset($_POST['reset'])) {
        unset($_SESSION['prenoms']);
    }

    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . htmlspecialchars($prenom) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
