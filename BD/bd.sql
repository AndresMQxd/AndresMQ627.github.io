create database TANDALOOP_DB

use TANDALOOP_DB

-- tabla de Usuarios
CREATE TABLE Usuarios (
    id_usuario integer  not null auto_increment,
    nombre VARCHAR(50),
    email VARCHAR(50),
    contraseña VARCHAR(100),
    fecha_registro DATE,
    tipo_usurio VARCHAR(50),
    primary key(id_usuario)
);

select * from Usuarios

 
 
-- tabla de Tandas
CREATE TABLE Tandas (
    id_tanda INT PRIMARY KEY IDENTITY(1,1),
    nombre_tanda VARCHAR(50),
	num_participantes int,
    fecha_creacion DATE,
    estado VARCHAR(50),
    cantidad DECIMAL
);


-- tabla de Participantes
CREATE TABLE Participantes (
    id_participante INT PRIMARY KEY IDENTITY(1,1),
    id_tanda INTEGER,
    id_usuario INTEGER,
    fecha_registro DATE
);
 
-- tabla de Contribuciones
CREATE TABLE Contribuciones (
    id_contribucion INT PRIMARY KEY IDENTITY(1,1),
    id_participante INTEGER,
    monto DECIMAL,
    fecha_contribucion DATE
);
 
-- tabla de Pagos
CREATE TABLE Pagos (
    id_pago INT PRIMARY KEY IDENTITY(1,1),
    id_tanda INTEGER,
    monto DECIMAL,
	id_participante INTEGER,
    fecha_pago DATE
);
 
 
-- Insertar registros en la tabla Usuarios
INSERT INTO Usuarios (nombre, email, contraseña, fecha_registro, tipo_usurio)
VALUES
('Andres Morales', 'andres.m@email.com', '1234567', '2024-11-14', 'Administrador'),
('Sebastian Cochon', 'sebastian.coch@email.com', 'jgfuiuy7', '2024-11-14', 'Participante'),
('Juan Pérez', 'juan.perez@email.com', 'contraseña123', '2024-11-14', 'Participante'),
('Ana Gómez', 'ana.gomez@email.com', 'contraseña456', '2024-11-12', 'Administrador');

 
-- Insertar registros en la tabla Tandas
INSERT INTO Tandas (nombre_tanda,num_participantes, fecha_creacion, estado, cantidad)
VALUES
('Tanda sushiBox', 5, '2024-11-19', 'Activa', 3000.00),
('Tanda TecNCG', 5, '2024-11-10', 'Activa', 1000.00),
('Tanda ISC 2024', 8, '2024-11-09', 'Pendiente', 1500.00);
 
-- Insertar registros en la tabla Participantes
INSERT INTO Participantes (id_tanda, id_usuario, fecha_registro)
VALUES
(3, 3, '2024-11-19'),
(1, 1, '2024-11-10'), 
(2, 2, '2024-11-9');
 
-- Insertar registros en la tabla Contribuciones
INSERT INTO Contribuciones (id_participante, monto, fecha_contribucion)
VALUES
(3, 300.00, '2024-11-30'),  
(4, 450.00, '2024-11-27'),
(1, 200.00, '2024-11-20'),  
(2, 250.00, '2024-11-27');  
 
-- Insertar registros en la tabla Pagos
INSERT INTO Pagos (id_tanda,id_participante, monto, fecha_pago)
VALUES
(4, 800.00, 1, '2024-11-29'),
(3, 1300.00, 2, '2024-11-29'),
(1, 800.00, 1, '2024-11-29'),
(2, 1300.00, 2, '2024-11-29');
