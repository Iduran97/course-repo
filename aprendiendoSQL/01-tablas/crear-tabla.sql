/*
int (n° de cifras)                       ENTERO
integer (n° de cifras)                   ENTERO                      (max 5294967295)
varchar (n° de caracteres)               STRING / ALAFANUMERICO      (max 255)
char (n° de caracteres)                  STRING / ALFANUMERICO
float (n° de cifras, n° de decimales)    DECIMAL / COMA FLOTANTE 
date                                     FECHA
MEDIUMTEXT                               STRING / ALFANUMERICO       (max 65535)
LONGTEXT                                 STRING / ALFANUMERICO       (max 16 millones)
TEXT                                     STRING / ALFANUMERICO       (max 4 billones)
MEDIUMINT                                ENTERO 
BIGINT                                   ENTERO 
*/
/*
CREAR TABLA
*/
CREATE TABLE usuarios(
    id int(11) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(255) not null,
    email varchar(100) default '@gmail.com',
    contraseña varchar(255),
    fecha date,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);