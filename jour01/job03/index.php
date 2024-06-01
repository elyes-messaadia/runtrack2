<?php
 $booleanPlateforme = true;
 $wholePlateforme = 42;
 $stringPlateforme= "LaPlateforme";
 $floatPlateforme = 42.42;

 $variables = [
    ["type" => "Boolean", "nom" => "booleanPlateforme", "valeur" => $booleanPlateforme ? "true" : "false"],
    ["type" => "Integer", "nom" => "wholePlateforme", "valeur" => $wholePlateforme],
    ["type" => "String", "nom" => "stringPlateforme", "valeur" => $stringPlateforme],
    ["type" => "Float", "nom" => "floatPlateforme", "valeur" => $floatPlateforme]
];

 // Début de la génération du tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Nom</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Génération des lignes du tableau avec les données des variables
foreach ($variables as $row) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row["type"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["nom"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["valeur"]) . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>