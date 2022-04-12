/*
EJERCICIO 15
1. Mostrar los clientes que mas pedidos han hecho y mostrar cuantos pedidos hicieron
*/

SELECT c.nombre AS 'cliente', COUNT(e.id) AS 'pedidos hechos' FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id 
GROUP BY e.cliente_id;

