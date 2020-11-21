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


-- creación de la tabla de reservas
drop table if exists reservas;
create table reservas(
    -- creación de las columnas
    id INT PRIMARY KEY AUTO_INCREMENT,
    cod_huesp varchar(255) not null,
    fech_ingreso varchar(255) not null,
    fech_salida varchar (255) not null,
    cant_adultos varchar (255) not null,
    cant_ninhos varchar (255) not null,
    tipo_hab varchar (255) not null,
    id_usuario int not null,
    foreign key (id_usuario) references usuarios(id)
)Engine InnoDB default charset=latin1;