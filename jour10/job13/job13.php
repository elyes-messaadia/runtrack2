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

// SQL query to fetch room names and floor names
$sql = "SELECT salles.nom, salles.id_etage FROM salles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start the HTML table
    echo "<table border='1'>";
    echo "<tr><th>Nom des Salles</th><th>Nom de leur Étage</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nom"]. "</td><td>" . $row["id_etage"]. "</td></tr>";
    }

    // End the HTML table
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

