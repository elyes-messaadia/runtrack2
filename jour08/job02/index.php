<?php
// Check if the reset button has been clicked
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600); // Set the cookie value to 0
    $_COOKIE['nbvisites'] = 0; // Update the $_COOKIE superglobal for immediate display
} else {
    // Check if the cookie is set
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1; // Increment the cookie value
    } else {
        $nbvisites = 1; // Initialize the cookie if not set
    }
    setcookie('nbvisites', $nbvisites, time() + 3600); // Update the cookie
    $_COOKIE['nbvisites'] = $nbvisites; // Update the $_COOKIE superglobal for immediate display
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Counter</title>
</head>
<body>

<p>Number of visits: <?php echo $_COOKIE['nbvisites']; ?></p>

<form method="post" action="">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
