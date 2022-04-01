/*
EJERCICIO 1
1. Crear la base de datos de un concecionario de autos
*/

CREATE TABLE coches (
    id int(255) auto_increment not null,
    modelo varchar(255) not null,
    marca varchar(255) not null,
    precio float not null,
    stock int(255),
    CONSTRAINT pk_coches PRIMARY KEY(id)
);

CREATE TABLE grupos (
    int id(255) auto_increment not null,
    nombre varchar(255) not null,
    ciudad varchar(255) not null,
    CONSTRAINT pk_grupos PRIMARY KEY(id)
);

CREATE TABLE vendedores (
    int id(255) auto_increment not null,
    int grupo_id(255) not null,
    nombre varchar(255) not null,
    apellidos varchar(255) not null,
    cargo varchar(255) not null,
    fecha_alta date not null,
    sueldo float not null,
    comision float not null,
    jefe int(255) not null,
    CONSTRAINT pk_vendedores PRIMARY KEY(id)
);