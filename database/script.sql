CREATE DATABASE bridehouse;
USE bridehouse;

create table admin
(
  username char(16)     not null
    primary key,
  password char(40)     not null,
  email    varchar(100) not null
);

create table categoria
(
  idcategoria  int unsigned auto_increment
    primary key,
  denominacion char(60) not null
);

create table cliente
(
  idcliente int unsigned auto_increment
    primary key,
  nombre    varchar(60) default '' not null,
  direccion varchar(80) default '' not null,
  telefono  char(10)               not null,
  fecha     varchar(20)            null,
  email     varchar(100)           not null,
  password  varchar(30) default '' not null
);

create table detalle_pedido
(
  idpedido   int unsigned default '0' not null,
  idproducto char(16) default ''      not null,
  precio     float(7, 2)              null,
  cantidad   tinyint unsigned         not null,
  primary key (idpedido, idproducto)
);

create table pedido
(
  idpedido  int unsigned auto_increment
    primary key,
  idcliente int unsigned not null,
  monto     float(7, 2)  null,
  fecha     date         not null,
  ship_city char(30)     not null
);

create table producto
(
  idproducto  int auto_increment
    primary key,
  nombre      char(100)    null,
  idcategoria int unsigned null,
  precio      float(7, 2)  not null,
  descripcion varchar(255) null,
  stock       int unsigned not null,
  marca       char(100)    not null,
  oferta      int          null
);

INSERT INTO producto VALUES (NULL, 'Versalle limpus 1970', NULL, 200, 'a description for this specificy product.', 37, 'Naxtar Filofus', 0);
INSERT INTO producto VALUES (NULL, 'Testing name', NULL, 325, 'a description for this specificy product.', 53, 'Testing brand', 0);

INSERT INTO producto VALUES (NULL, 'Testing name', NULL, 325, 'a description for this specificy product.', 53, 'Testing brand', 0);
INSERT INTO producto VALUES (NULL, 'Testing name', NULL, 325, 'a description for this specificy product.', 53, 'Testing brand', 0);
INSERT INTO producto VALUES (NULL, 'Testing name', NULL, 325, 'a description for this specificy product.', 53, 'Testing brand', 0);
INSERT INTO producto VALUES (NULL, 'Testing name', NULL, 325, 'a description for this specificy product.', 53, 'Testing brand', 0);
INSERT INTO producto VALUES (NULL, 'Testing name', NULL, 325, 'a description for this specificy product.', 53, 'Testing brand', 0);

SELECT * FROM cliente;
SELECT * FROM pedido;
SELECT * FROM detalle_pedido;

TRUNCATE TABLE producto;