create database proyecto1;
use proyecto1;

create table usuarios (
    id int primary key auto_increment,
    nombre varchar(255),
    correo varchar(255),
    contraseña text
)

create table articulos (
    id int primary key auto_increment,
    nombre varchar(255),
    fecha date,
    contenido text,
    foto text,
    autor int,
    foreign key (autor) references usuarios(id)
);

INSERT INTO articulos (nombre, fecha, contenido, foto, autor) values (
    "desde la base de datos","2024-08-08","Lorem Ipsum",
    "https://yt3.googleusercontent.com/o5_mjwl7QSyLQBguYioDM3wB4POD7
    tFbCOmBJn5SdpwZ5QvmrzoDG_lM_hgRma6qVKPHwqUJ2q8=s900-c-k-c0x00ffffff-no-rj",1);

INSERT INTO usuarios (nombre, correo, contraseña) values ("sofia", "sofiabelenbr1208@gmail.com", "123456")
