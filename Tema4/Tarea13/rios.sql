drop database if exists rios;
create database rios;
drop user if EXISTS adminRios;
create user adminRios identified by 'Miguel';
use rios;
grant all on rios.* to adminRios;

CREATE TABLE rios (
    nombre VARCHAR(25) primary key,
    num_afluentes int,
    longitud decimal,
    ultima_medicion date
);

INSERT INTO rios VALUES ('Duero', 26, 897, '2023-11-25');
INSERT INTO rios VALUES ('Tajo', 9, 1007, '2023-11-18');
INSERT INTO rios VALUES ('Ebro', 22, 930, '2023-12-04');
INSERT INTO rios VALUES ('Guadalquivir', 26, 657, '2023-11-12');