<?php
$varboolean = true;
$varint = 6;
$varstring = "LaPlateforme";
$varfloat = 3.6;


echo "
<table border='1'>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
         </tr>
    </thead>
    <tbody>
        <tr>
                <td>" .$varboolean. "</td>
                <td>" .$varint. "</td>
                <td>" .$varstring. "</td>
                <td>" .$varfloat. "</td>
        </tr>
    </tbody>
</table>
"
;


?>