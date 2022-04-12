/*
EJERCICIO 13
1. Sacar la media de sueldos entre todos los vendedores por grupo
*/

SELECT g.nombre, g.ciudad, CEIL(AVG(v.sueldo)) AS 'media de sueldos' FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;