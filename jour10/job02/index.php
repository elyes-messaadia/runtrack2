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

// SQL query to fetch 'nom' and 'capacité' columns
$sql = "SELECT nom, capacite FROM salles";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === FALSE) {
    die("Error: " . $conn->error);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Room Capacities</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Room Capacities</h2>

<table>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>
    </tr>
    <?php
    // Fetch and display each row of data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nom"] . "</td><td>" . $row["capacite"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No data found</td></tr>";
    }
    // Free result set
    $result->free();
    ?>
</table>

</body>
</html>

<?php
// Close connection
$conn->close();
?>


