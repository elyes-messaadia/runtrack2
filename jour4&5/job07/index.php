<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison Formulaire</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <form id="maisonForm">
        <label for="largeur">Largeur:</label>
        <input type="text" id="largeur" name="largeur">
        <br>
        <label for="hauteur">Hauteur:</label>
        <input type="text" id="hauteur" name="hauteur">
        <br>
        <button type="submit">Submit</button>
    </form>
    <pre id="output"></pre>

    <script>
        document.getElementById('maisonForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const largeur = parseInt(document.getElementById('largeur').value);
            const hauteur = parseInt(document.getElementById('hauteur').value);
            afficherMaison(largeur, hauteur);
        });

        function afficherMaison(largeur, hauteur) {
            let output = '';

            // Toit de la maison
            for (let i = 0; i < hauteur; i++) {
                output += ' '.repeat(hauteur - i - 1);
                output += '/'.repeat(1 + i);
                output += '\\'.repeat(1 + i);
                output += ' '.repeat(hauteur - i - 1);
                output += '\n';
            }

            // Mur de la maison
            for (let i = 0; i < hauteur; i++) {
                output += '|';
                output += ' '.repeat(largeur - 2);
                output += '|\n';
            }

            // Fondation de la maison
            output += '-'.repeat(largeur);

            document.getElementById('output').textContent = output;
        }
    </script>
</body>
</html>


