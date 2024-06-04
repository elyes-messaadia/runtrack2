<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "root"; // Change this if your database has different credentials
$password = ""; // Change this if your database has a password
$dbname = "jour09";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Execute SQL query
$sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
$result = $conn->query($sql);

// Check if query was successful
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Step 3: Fetch the results
if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table border='1'>
            <tr>
                <th>Capacité Moyenne</th>
            </tr>";

    // Output data of the result
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["capacite_moyenne"]) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}

// Step 4: Close the connection
$conn->close();
?>
