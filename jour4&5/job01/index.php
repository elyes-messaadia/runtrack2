<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>
</head>
<body>
    <form method="GET" action="">
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
// echo "Le nombre d'argument GET envoyé est : " . count($_GET);
// Question 1: que se passe-t-il si on envoie le formulaire sans remplir les champs?
// Question 2: que se passe-t-il si on envoie le formulaire en remplissant les champs avec des (")?
// Question 3: y'a-t-il une meilleure façon de faire que d'utiliser des guillemets pour les valeurs des champs? Si oui, laquelle?
// Question 4: 
echo "Le nombre d'argument GET envoyé est : " . $argumentCount;
?>

</body>
</html>

