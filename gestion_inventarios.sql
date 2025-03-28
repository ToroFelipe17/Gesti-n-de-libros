-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS gestion_inventarios;

-- Usar la base de datos
USE gestion_inventarios;

-- Crear la tabla libros
CREATE TABLE IF NOT EXISTS libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL,
    fecha_ingreso DATETIME DEFAULT CURRENT_TIMESTAMP
);
