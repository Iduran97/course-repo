/*
EJERCICIO 8
1. Visualizar todos los coches en cuya marca exista la letra 'a' y cuyo modelo empieze por 'c'
*/

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'c%';