create
database venta_informatica;
use
venta_informatica;
create table categorias
(
    id              int auto_increment primary key,
    nombreCategoria varchar(255)
);
create table marcas
(
    id          int auto_increment primary key,
    nombreMarca varchar(255)
);


create table articulos
(
    id                int auto_increment primary key,
    nombreProducto    varchar(255),
    precio            double,
    imagenCatalogo    varchar(255),
    imagenDescripcion varchar(255),
    descripcion       longtext,
    Categoria         int,
    nombreMarca       int,
    foreign key (nombreMarca) references marcas (id),
    foreign key (categoria) references categorias (id)
);

