DROP TABLE IF EXISTS perfiles;
CREATE TABLE perfiles (
    id_perfil BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    perfil VARCHAR(100),
    descripcion VARCHAR(100)
);

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
    identificacion VARCHAR(13) UNIQUE,
    nombres VARCHAR(50),
    apellidos VARCHAR(50),
    email VARCHAR(100),
    telefono VARCHAR(20),
    user VARCHAR(15),
    password varchar(50),
    direccion VARCHAR(500),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    id_perfil BIGINT UNSIGNED,
    FOREIGN KEY (id_perfil) REFERENCES perfiles(id_perfil)
);

DROP TABLE IF EXISTS producto;
CREATE TABLE producto (
    id_producto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),    
    stock DECIMAL(8,4),
    price DECIMAL(8,4),
    image BLOB,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

DROP TABLE IF EXISTS venta;
CREATE TABLE venta (
    id_venta BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sobtotal DECIMAL(8,4),    
    iva DECIMAL(8,4),
    total DECIMAL(8,4),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,   
    id_producto BIGINT,
    id_estado BIGINT,
    id_usuario BIGINT
);


DROP TABLE IF EXISTS estados;
CREATE TABLE estados (
    id_estado BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    estado VARCHAR(100),
    nombres VARCHAR(50),
    descripcion VARCHAR(100)
);
