/*
EJERCICIO 11
1. Visualizar todos los cargos de los vendedores y mostrar el numero de vendedores que hay en cada cargo
*/

SELECT cargo, COUNT(id) AS 'numero de vendedores' FROM vendedores GROUP BY cargo DESC;