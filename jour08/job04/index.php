<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 04</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
            $prenom = htmlspecialchars($_POST['prenom']);
            setcookie('prenom', $prenom, time() + 3600); // Cookie expires in 1 hour
            header("Location: index.php"); // Redirect to avoid form resubmission
        }
        
        if (isset($_POST['deco'])) {
            setcookie('prenom', '', time() - 3600); // Expire the cookie
            header("Location: index.php"); // Redirect to refresh the page
        }
    }
    
    if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])) {
        echo "<p>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !</p>";
        echo '<form method="post" action="index.php">
                <button type="submit" name="deco">Déconnexion</button>
              </form>';
    } else {
        echo '<form method="post" action="index.php">
                <input type="text" name="prenom" placeholder="Entrez le prénom">
                <button type="submit" name="connexion">Connexion</button>
              </form>';
    }
    ?>
</body>
</html>
