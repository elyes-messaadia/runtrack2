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

// SQL query to count the total number of students
$sql = "SELECT COUNT(*) as nb_etudiants FROM etudiants";

// Execute the query and get the result
$result = $conn->query($sql);

// Check if the query returned any results
if ($result === FALSE) {
    die("Error: " . $conn->error);
}

// Fetch the result row
$row = $result->fetch_assoc();

// Start the HTML table
echo "<table border='1'>";
echo "<tr><th>Nombre d'étudiants</th></tr>";

// Output the total number of students
echo "<tr><td>" . $row["nb_etudiants"] . "</td></tr>";

// End the HTML table
echo "</table>";

// Close the connection
$conn->close();
?>
