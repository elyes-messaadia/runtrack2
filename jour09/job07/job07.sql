-- job07.sql

SELECT *
FROM etudiants
WHERE DATEDIFF(CURRENT_DATE, naissance) / 365 > 18;
