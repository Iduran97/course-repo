/*
EJERCICIO 6
1. Visualizar el nombre y los apellidos de los vendedores en una misma columna, su fecha de registro 
y el dia de la semana que se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'nombre completo', fecha_alta, DAYNAME(fecha_alta) FROM vendedores; 