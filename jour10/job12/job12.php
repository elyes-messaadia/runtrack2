<?php
$servername = "localhost";
$username = "root";
$password = ""; // Remplacez par votre mot de passe
$dbname = "jour09";

// Crée une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Requête SQL pour sélectionner les données requises
$sql = "SELECT prenom, nom, DATE_FORMAT(naissance, '%Y-%m-%d') AS date_naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau HTML des Etudiants</title>
    <style>
        table {
            width: 100%;
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
    <h1>Liste des Etudiants (1998-2018)</h1>
    <table>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["prenom"]) . "</td>
                        <td>" . htmlspecialchars($row["nom"]) . "</td>
                        <td>" . htmlspecialchars($row["date_naissance"]) . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Aucun résultat trouvé</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>

