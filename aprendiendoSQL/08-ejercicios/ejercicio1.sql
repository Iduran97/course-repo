/*
EJERCICIO 1
1. Crear la base de datos de un concecionario de autos
*/

CREATE DATABASE IF NOT EXISTS concecionario;
USE concecionario;

CREATE TABLE coches (
    id int(10) auto_increment not null,
    modelo varchar(255) not null,
    marca varchar(255) not null,
    precio float(20,2) not null,
    stock int(255) not null,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos (
    id int(10) auto_increment not null,
    nombre varchar(255) not null,
    ciudad varchar(255) not null,
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores (
    id int(10) auto_increment not null,
    grupo_id int(10) not null,
    jefe_id int(10),
    nombre varchar(255) not null,
    apellidos varchar(255) not null,
    cargo varchar(255) not null,
    fecha_alta date not null,
    sueldo float(20,2) not null,
    comision float(10,2) not null,
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedores_grupos FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedores_jefes FOREIGN KEY(jefe_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes (
    id int(10) auto_increment not null,
    vendedor_id int(255) not null,
    nombre varchar(255) not null,
    ciudad varchar(255) not null,
    gastado float not null,
    fecha_alta date not null,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_vendedores FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos (
    id int(20) auto_increment not null,
    cliente_id int(20) not null,
    coche_id int(20) not null,
    cantidad int(100),
    fecha date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_clientes FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_coches FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

# LLENAR LA BASE DE DATOS CON INFORMACION #

# COCHES #
INSERT INTO coches VALUES(null,'R8','Audi',168020,13);
INSERT INTO coches VALUES(null,'Corvette','Chevrolet',60100,12);
INSERT INTO coches VALUES(null,'Ateca','Cupra',42980,13);
INSERT INTO coches VALUES(null,'GT','Ford',338000,15);
INSERT INTO coches VALUES(null,'Mustang','Ford',43350,20);
INSERT INTO coches VALUES(null,'Civic','Honda',24520,17);
INSERT INTO coches VALUES(null,'Aventador','Lamborghini',422290,12);
INSERT INTO coches VALUES(null,'CR-V','Honda',32650,9);
INSERT INTO coches VALUES(null,'GranCabrio','Maserati',168020,10);
INSERT INTO coches VALUES(null,'Senna','McLaren',1048727,21);
INSERT INTO coches VALUES(null,'Urus','Lamborghini',207000,8);

# GRUPOS #
INSERT INTO grupos VALUES(null,'Mecotronicos','Hokkaido');
INSERT INTO grupos VALUES(null,'Car May Cry','Touhoku');
INSERT INTO grupos VALUES(null,'Devilchads','Kantou');
INSERT INTO grupos VALUES(null,'One Punch Car','Choubu');
INSERT INTO grupos VALUES(null,'Nagagods','Kansai');
INSERT INTO grupos VALUES(null,'Beruserker','Chuugoku');
INSERT INTO grupos VALUES(null,'Femto Cars','Shikoku');
INSERT INTO grupos VALUES(null,'GatsLine','Kyuushuu');

# VENDEDORES #
INSERT INTO vendedores VALUES(null,1,null,'Toji','Fushiguro','Jefe de tienda',CURDATE(),30000,10);
INSERT INTO vendedores VALUES(null,3,null,'Yujii','Itadori','Mecanico jefe',CURDATE(),150000,3.5);
INSERT INTO vendedores VALUES(null,4,null,'Nobara','Kugisaki','Supervisor',CURDATE(),50000,5);
INSERT INTO vendedores VALUES(null,2,1,'Megumi','Fushiguro','Mecanico jefe',CURDATE(),25000,9.5);
INSERT INTO vendedores VALUES(null,5,null,'Satoru','Gojo','Jefe de tienda',CURDATE(),123000,5);
INSERT INTO vendedores VALUES(null,1,null,'Light','Yagami','Jefe de tienda',CURDATE(),80000,12);
INSERT INTO vendedores VALUES(null,6,5,'Shinra','Kusakabe','Vendedor',CURDATE(),82000,6.75);
INSERT INTO vendedores VALUES(null,8,null,'Josuke','Higashikata','Vendedor',CURDATE(),101000,8.5);
INSERT INTO vendedores VALUES(null,2,null,'Ichigo','Kurosaki','Vendedor',CURDATE(),29000,15);
INSERT INTO vendedores VALUES(null,7,9,'Rukia','Kuchicki','Supervisor',CURDATE(),30000,1);

# CLIENTES #
INSERT INTO clientes VALUES(null,2,'Neverland Inc.','Aomori',20000,CURDATE());
INSERT INTO clientes VALUES(null,5,'Maxim','Kagawa',40000,CURDATE());
INSERT INTO clientes VALUES(null,8,'Jujutsu Reparaciones','Saga',24500,CURDATE());
INSERT INTO clientes VALUES(null,7,'Po-po-rambo','Nagasaki',30400,CURDATE());
INSERT INTO clientes VALUES(null,9,'Akuma Co.','Tokyo',124500,CURDATE());
INSERT INTO clientes VALUES(null,1,'ZoidZ','Saitama',12500,CURDATE());

# ENCARGOS #
INSERT INTO encargos VALUES(null,1,2,2,CURDATE());
INSERT INTO encargos VALUES(null,2,5,2,CURDATE());
INSERT INTO encargos VALUES(null,3,7,4,CURDATE());
INSERT INTO encargos VALUES(null,6,2,1,CURDATE());
INSERT INTO encargos VALUES(null,5,7,6,CURDATE());
INSERT INTO encargos VALUES(null,4,1,3,CURDATE());