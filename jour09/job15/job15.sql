-- job15.sql

SELECT salles.nom AS salle_nom, etages.nom AS etage_nom
FROM salles
JOIN etages ON salles.etage_id = etages.id;
