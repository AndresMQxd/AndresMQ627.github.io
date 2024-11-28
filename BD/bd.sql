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

select * from Participantes

 
 
-- tabla de Tandas
CREATE TABLE Tandas (
    id_tanda integer  not null auto_increment,
    nombre_tanda VARCHAR(50),
	num_participantes int,
    fecha_creacion DATE,
    estado VARCHAR(50),
    cantidad DECIMAL,
     primary key(id_tanda)
);


-- tabla de Participantes
CREATE TABLE Participantes (
    id_participante integer  not null auto_increment,
    id_tanda INTEGER,
    nombre VARCHAR(50),
    fecha_registro DATE,
    email VARCHAR(50),
    telefono VARCHAR(50),
     primary key(id_participante)
);

INSERT INTO Participantes (id_tanda, nombre, fecha_registro, email, telefono)
VALUES
(3, 'Ana Rodriguez', '2024-03-18', 'ana.rodriguez@gmail.com', '636-112-6503'),
(4, 'Luis Hernandez', '2023-09-12', 'luis.hernandez@gmail.com', '636-113-6504'),
(5, 'Carlos Martinez', '2022-11-20', 'carlos.mtz@gmail.com', '636-114-6505'),
(6, 'Fernanda Gomez', '2023-02-28', 'fer.gomez@gmail.com', '636-115-6506'),
(7, 'Ricardo Sanchez', '2024-04-10', 'ricardo.s@gmail.com', '636-116-6507'),
(8, 'Sofia Jimenez', '2022-10-15', 'sofia.j@gmail.com', '636-117-6508'),
(9, 'Jorge Vargas', '2023-03-22', 'jorge.vargas@gmail.com', '636-118-6509'),
(10, 'Natalia Torres', '2024-06-25', 'natalia.t@gmail.com', '636-119-6510'),
(1, 'Victor Romero', '2023-05-18', 'victor.romero@gmail.com', '636-120-6511'),
(2, 'Camila Diaz', '2022-09-14', 'camila.diaz@gmail.com', '636-121-6512'),
(3, 'Gabriel Vega', '2023-11-30', 'gabriel.vega@gmail.com', '636-122-6513'),
(4, 'Valeria Castillo', '2024-08-18', 'valeria.c@gmail.com', '636-123-6514'),
(5, 'Diego Rios', '2022-07-10', 'diego.rios@gmail.com', '636-124-6515'),
(6, 'Lorena Paredes', '2023-01-01', 'lorena.p@gmail.com', '636-125-6516'),
(7, 'Daniel Ruiz', '2024-02-14', 'daniel.ruiz@gmail.com', '636-126-6517'),
(8, 'Isabella Benitez', '2023-12-05', 'isabella.b@gmail.com', '636-127-6518'),
(9, 'Hector Espinoza', '2023-04-08', 'hector.e@gmail.com', '636-128-6519'),
(10, 'Alejandra Salinas', '2024-09-21', 'alejandra.s@gmail.com', '636-129-6520'),
(1, 'Mateo Ortega', '2023-08-11', 'mateo.ortega@gmail.com', '636-130-6521'),
(2, 'Emilia Reyes', '2022-12-25', 'emilia.reyes@gmail.com', '636-131-6522'),
(3, 'Miguel Guzman', '2023-07-04', 'miguel.g@gmail.com', '636-132-6523'),
(4, 'Paola Fuentes', '2024-05-12', 'paola.f@gmail.com', '636-133-6524'),
(5, 'Francisco Aguilar', '2022-08-18', 'francisco.a@gmail.com', '636-134-6525'),
(6, 'Daniela Chavez', '2023-10-22', 'daniela.ch@gmail.com', '636-135-6526'),
(7, 'Adrian Soto', '2024-11-09', 'adrian.s@gmail.com', '636-136-6527'),
(8, 'Marta Molina', '2022-06-30', 'marta.m@gmail.com', '636-137-6528'),
(9, 'Roberto Navarro', '2023-02-18', 'roberto.n@gmail.com', '636-138-6529'),
(10, 'Lucia Peña', '2024-07-27', 'lucia.p@gmail.com', '636-139-6530');
 
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
