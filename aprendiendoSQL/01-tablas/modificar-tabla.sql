# RENOMBRAR UNA TABLA #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR NOMBRE DE UNA COLUMNA #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR SU NOMBRE #
ALTER TABLE usuarios_renom MODIFY apellido char(50) not null;

# AÑADIR COLUNMA #
ALTER TABLE usuarios_renom ADD website varchar(100) not null;

# AÑADIR RESTRICCION A COLUMNA # 
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR UNA COLUMNA #
ALTER TABLE usuarios_renom DROP website;