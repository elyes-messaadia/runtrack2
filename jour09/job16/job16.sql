-- job16.sql

SELECT etages.nom AS etage_nom, salles.nom AS "Biggest Room", salles.capacite
FROM salles
JOIN etages ON salles.etage_id = etages.id
ORDER BY salles.capacite DESC
LIMIT 1;
