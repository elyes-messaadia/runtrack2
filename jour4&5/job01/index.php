<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>
</head>
<body>
    <form method="GET" action="process_get.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php
$argumentCount = 0;

foreach ($_GET as $key => $value) {
    if (isset($_GET[$key])) {
        $argumentCount++;
    }
}

echo "Le nombre d'argument GET envoyé est : " . $argumentCount;
?>

</body>
</html>

