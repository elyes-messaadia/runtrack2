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

// SQL query to sum the surface area of all floors
$sql = "SELECT SUM(superficie) as superficie_totale FROM etage"; // Ensure 'surface_area' and 'etages' are correct

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
echo "<tr><th>Superficie Totale</th></tr>";

// Output the total surface area
echo "<tr><td>" . $row["superficie_totale"] . "</td></tr>";

// End the HTML table
echo "</table>";

// Close the connection
$conn->close();
?>
