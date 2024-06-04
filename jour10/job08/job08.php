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
$sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$result = $conn->query($sql);

// Step 3: Fetch the results
if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table border='1'>
            <tr>
                <th>capacite_totale</th>
            </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["capacite_totale"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Step 4: Close the connection
$conn->close();
?>
