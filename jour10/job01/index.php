<?php
// Paramètres de connexion à la base de données
$serveur = "localhost"; // Modifier si nécessaire
$utilisateur = "root"; // Modifier si nécessaire
$motDePasse = ""; // Modifier si nécessaire
$nomBDD = "jour09";

// Créer la connexion
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBDD);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

// Requête SQL pour sélectionner toutes les données de la table etudiants
$sql = "SELECT * FROM etudiants";
$resultat = $connexion->query($sql);

if ($resultat->num_rows > 0) {
    // Début du tableau HTML
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    // Affichage des lignes du tableau
    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $ligne["prenom"] . "</td>";
        echo "<td>" . $ligne["nom"] . "</td>";
        echo "<td>" . $ligne["naissance"] . "</td>";
        echo "<td>" . $ligne["sexe"] . "</td>";
        echo "<td>" . $ligne["email"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucun résultat";
}

// Fermer la connexion
$connexion->close();
?>
