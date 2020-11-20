-- creación de la base de datos
drop database if exists ohana;
create database ohana;
use ohana;
-- creación de la tabla de registros
drop table if exists usuarios;
create table usuarios(
    -- creación de las columnas
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(255) not null,
    email varchar(255) not null,
    pass varchar (255) not null
)Engine InnoDB default charset=latin1;