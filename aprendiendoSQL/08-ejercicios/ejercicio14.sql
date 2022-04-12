/*
EJERCICIO 14
1. Visualizar las unidades totales vendidas de cada coche a cada cliente mostrando
el nombre del prodcuto, el numero del cliente y la suma de unidades
*/

SELECT coches.modelo AS 'coche', clientes.nombre AS 'cliente', SUM(cantidad) AS 'unidades' FROM encargos
INNER JOIN coches ON coches.id = encargos.coche_id
INNER JOIN clientes ON clientes.id = encargos.cliente_id
GROUP BY coche_id, cliente_id;