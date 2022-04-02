/*
VISTAS:
Se pueden definir como una conslta almacenada en la base de datos que se utiliza
como una tabla virtual y no alamcena datos si no que utiliza asociaciones y los datos originales 
de las tablas, de forma que siempre se mantiene actualizada 
*/

CREATE VIEW entradas_con_nombres AS 
SELECT e.id, e.titulo, u.nombre AS 'autor', c.nombre AS 'categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;