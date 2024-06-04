<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select prenom, nom, and date de naissance of female students
$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";

// Execute the query and get the result
$result = $conn->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
    // Start the HTML table
    echo "<table border='1'>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Naissance</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["prenom"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["naissance"]. "</td></tr>";
    }
    
    // End the HTML table
    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
