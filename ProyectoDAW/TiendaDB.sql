-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS TiendaProyecto;
USE TiendaProyecto;

-- Crear la tabla de perfiles
CREATE TABLE Perfiles (
    idPerfil INT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

INSERT INTO Perfiles (idPerfil, nombre) VALUES
(1, 'Administrador'),
(2, 'Usuario Normal');

-- Crear la tabla de usuarios
CREATE TABLE Usuarios (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    user VARCHAR(50) UNIQUE NOT NULL,
    pass VARCHAR(255) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    fechaNacimiento DATE,
    --dinero DECIMAL(10,2) NOT NULL,
    idPerfil INT DEFAULT 2, --valor por defecto usuario normal
    FOREIGN KEY (idPerfil) REFERENCES Perfiles(idPerfil)
);
    --CHECK (CHAR_LENGTH(pass) >= 8 AND pass REGEXP '^(?=.*[a-z])(?=.*[0-9])')

-- Crear la tabla de productos
CREATE TABLE Productos (
    codProducto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    imagen_url VARCHAR(255) NOT NULL,
    UNIQUE KEY (codProducto)
);
    --stock INT NOT NULL,
    --activo BOOLEAN NOT NULL DEFAULT true,-- tambien es lioso
--blob para img ?

-- Crear la tabla de transacciones
CREATE TABLE Transacciones (
    idTransaccion INT PRIMARY KEY AUTO_INCREMENT,
    comprador VARCHAR(50) NOT NULL,
    vendedor VARCHAR(50) NOT NULL,
    fechaTransaccion DATETIME NOT NULL,
    codProducto INT NOT NULL,
    precioTotal DECIMAL(10, 2) NOT NULL,-- ?
    FOREIGN KEY (comprador) REFERENCES Usuarios(user),
    FOREIGN KEY (vendedor) REFERENCES Usuarios(user),
    FOREIGN KEY (codProducto) REFERENCES Productos(codProducto)
);
    --cantidad INT DEFAULT 1,
    --estado ENUM('pendiente', 'completada', 'cancelada') NOT NULL,

-- Tabla para el chat?
CREATE TABLE Mensajes (
    idMensaje INT PRIMARY KEY AUTO_INCREMENT,-- idConversacion?
    codProducto INT NOT NULL,
    emisor VARCHAR(50) NOT NULL,
    receptor VARCHAR(50) NOT NULL,
    contenido TEXT NOT NULL,
    fechaEnvio TIMESTAMP NOT NULL,
    FOREIGN KEY (codProducto) REFERENCES Productos(codProducto),-- antes lo tenia con idTransaccion
    FOREIGN KEY (emisor) REFERENCES Usuarios(user),
    FOREIGN KEY (receptor) REFERENCES Usuarios(user)
);










-- INSERT INTO Usuarios (pass) values (sha1('miguel'));

-- Crear usuario BD
INSERT INTO Usuarios (nombre, apellidos, user, pass, email, fechaNacimiento)
VALUES ('Miguel', 'Barba', 'miguel', 'miguel', 'miguel@gmail.com', '1999-01-15');


-- Actualizar el estado de un producto a 'inactivo'
UPDATE Productos
SET estado = 'inactivo'
WHERE codProducto = <código_del_producto>;

-- Ejemplo de una transacción completada
INSERT INTO Transacciones (comprador, vendedor, fechaTransaccion, codProducto, cantidad, precioTotal, estado)
VALUES ('UsuarioComprador', 'UsuarioVendedor', NOW(), 123, 2, 25.00, 'completada');

-- Ejemplo de inserción de un mensaje
INSERT INTO Mensajes (idTransaccion, emisor, receptor, contenido, fechaEnvio)
VALUES (1, 'UsuarioEmisor', 'UsuarioReceptor', 'Hola, ¿cómo estás?', NOW());

-- Obtener mensajes de una conversación específica
SELECT *
FROM Mensajes
WHERE (emisor = 'Usuario1' AND receptor = 'Usuario2')
   OR (emisor = 'Usuario2' AND receptor = 'Usuario1')
ORDER BY fechaEnvio;
-- Esta consulta selecciona todos los mensajes entre dos usuarios,
-- independientemente de quién es el emisor y quién es el receptor.

