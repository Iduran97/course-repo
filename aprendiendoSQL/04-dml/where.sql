# CONSULTA CON UNA CONDICION #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERDAORES DE COMPARACION
Igual                   =
Distinto                !=
Menor                   <
Mayor                   >
Menor o igual           <=
Mayor o igual           =>
Entre                   between A and B
En                      in
Es nulo                 is null
No es nulo              is not null
Como                    like
No es como              not like
*/

/*
OPERADORES LOGICOS
O                       OR
Y                       AND
NO                      NOT
*/

/*
COMODINES
Cualquier cantidad de caracteres        %
Un caracter desconocido                 _
*/

# EJEMPLOS #
/* Nombres y apellidos de los usuarios que se registraron en 2019 */
SELECT nombre, apellidos FROM usuarios where YEAR(fecha) = 2019;

/* Nombres y apellidos de los usuarios que NO se registraron en 2019 */
SELECT nombre, apellidos FROM usuarios where YEAR(fecha) != 2019 OR ISNULL(fecha);

/* Email de los usuarios cuyo apellido contenga la letra 'a' y que su contraseña sea 1234*/
SELECT email FROM usuarios WHERE apellido LIKE '%a%' AND password = 1234;

/* Obtener todos los registros de la tabla usuarios cuyo año de registro sea par */
SELECT * FROM usuarios WHERE (YEAR(fecha) % 2 = 0);

/* Obetener todos los reistros de la tabla usuarios cuyo nombre tenga mas de 5 letras
y que se hayan registrado antes de 2020. Ademas mostrar el nombre en mayusculas*/
SELECT UPPER(nombre) AS 'nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;

