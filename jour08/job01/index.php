<?php
session_start();

// Check if the reset button has been clicked
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    // Initialize the session variable if not already set
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    // Increment the session variable
    $_SESSION['nbvisites'] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Counter</title>
</head>
<body>

<p>Number of visits: <?php echo $_SESSION['nbvisites']; ?></p>

<form method="post" action="">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
