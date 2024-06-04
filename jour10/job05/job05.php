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

// SQL query to select all information of students who are under 18 years old
$sql = "SELECT prenom, nom, naissance, sexe, email FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";

// Execute the query and get the result
$result = $conn->query($sql);

// Check if the query returned any results
if ($result === FALSE) {
    die("Error: " . $conn->error);
}

// Check the number of rows for debugging
$num_rows = $result->num_rows;
echo "Number of rows: " . $num_rows . "<br>";

if ($num_rows > 0) {
    // Start the HTML table
    echo "<table border='1'>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["prenom"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["naissance"]. "</td><td>" . $row["sexe"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    
    // End the HTML table
    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
