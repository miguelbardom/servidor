
-- Crear la base de datos
CREATE DATABASE IF NOT exists TiendaDB;
USE TiendaDB;

-- Crear la tabla de perfiles
CREATE TABLE Perfiles (
    idPerfil INT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

INSERT INTO Perfiles (idPerfil, nombre) VALUES
(1, 'Administrador'),
(2, 'Moderador'),
(3, 'Usuario Normal');

-- Crear la tabla de usuarios
CREATE TABLE Usuarios (
    idUsuario INT PRIMARY KEY,
    descUsuario VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    fechaNacimiento DATE,
    idPerfil INT,
    activo BOOLEAN DEFAULT true,
    FOREIGN KEY (idPerfil) REFERENCES Perfiles(idPerfil)
);

-- Crear la tabla de productos
CREATE TABLE Productos (
    codProducto INT PRIMARY KEY,
    descProducto VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    url VARCHAR(50)
);

-- Crear la tabla de pedidos
CREATE TABLE Pedidos (
    idCompra INT PRIMARY KEY AUTO_INCREMENT,
    idUsuario INT,
    fechaCompra DATE,
    codProducto INT,
    cantidad INT,
    precioTotal DECIMAL(10, 2),
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario),
    FOREIGN KEY (codProducto) REFERENCES Productos(codProducto)
);

-- Crear la tabla de albaranes
CREATE TABLE Albaranes (
    idAlbaran INT PRIMARY KEY AUTO_INCREMENT,
    fechaAlbaran DATETIME,
    codProducto INT,
    cantidad INT,
    idUsuario INT,
    FOREIGN KEY (codProducto) REFERENCES Productos(codProducto),
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
);

-- Perfiles:
--     idPerfil
--     nombre

-- Usuarios:
--     codUser
--     descUser
--     password
--     email
--     fechaNacimiento
--     perfil
--     activo

-- Productos:
--     codProducto
--     desc
--     precio
--     stock
--     url

-- Pedidos:
--     id
--     codUser
--     fechaCompra
--     codProducto
--     cantidad
--     precioTotal

-- Albaranes:
--     id
--     fechaAlbaran
--     codProducto
--     cantidad
--     codUser