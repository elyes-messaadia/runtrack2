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
$sql = "SELECT * FROM salles ORDER BY capacite DESC";
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
                <th>ID</th>
                <th>Nom</th>
                <th>Capacité</th>";
    
    // Check if 'etage' column exists
    $row = $result->fetch_assoc();
    $hasEtage = array_key_exists('etage', $row);

    if ($hasEtage) {
        echo "<th>Étage</th>";
    }

    echo "</tr>";

    // Output data of each row
    do {
        echo "<tr>
                <td>" . htmlspecialchars($row["id"]) . "</td>
                <td>" . htmlspecialchars($row["nom"]) . "</td>
                <td>" . htmlspecialchars($row["capacite"]) . "</td>";
        
        if ($hasEtage) {
            echo "<td>" . htmlspecialchars($row["etage"]) . "</td>";
        }

        echo "</tr>";
    } while ($row = $result->fetch_assoc());

    echo "</table>";
} else {
    echo "No results found";
}

// Step 4: Close the connection
$conn->close();
?>

