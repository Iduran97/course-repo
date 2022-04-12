/*
EJERCICIO 5
1. Alistar todos los vendedores y para cada vendedor mostrar su nombre y los dias que 
lleva trabajando en el concecionario
*/

SELECT nombre, DATEDIFF(CURDATE(),fecha_alta) AS 'dias trabajados' FROM vendedores; 