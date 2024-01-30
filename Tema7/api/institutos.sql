create database institutos;
use institutos;

create table institutos (
    id INT auto_increment primary key,
    nombre varchar(40) not null,
    localidad varchar(75) not null,
    telefono char(9) not null
) engine=innodb;

insert into institutos values (null, 'IES Claudio Moyano', 'Zamora', '980515252');
insert into institutos values (null, 'IES María de Molina', 'Zamora', '980980980');
insert into institutos values (null, 'IES La Vaguada', 'Zamora', '980515265');
insert into institutos values (null, 'IES Los Sauces', 'Benavente', '980902020');
