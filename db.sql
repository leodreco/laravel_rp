DROP DATABASE IF EXISTS pruebalaravel;
CREATE DATABASE pruebalaravel;
USE pruebalaravel;
CREATE TABLE cliente(
	id INT PRIMARY KEY AUTO_INCREMENT,
	cod CHAR(10) NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	direccion VARCHAR(200) NOT NULL,
	dni CHAR(8),
	ruc CHAR(11),
	estado bit DEFAULT (1),
	empleado int
);