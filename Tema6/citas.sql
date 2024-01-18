CREATE TABLE Cita (
    id int primary key auto_increment,
    especialista VARCHAR(25) not null,
    motivo varchar(200),
    fecha date not null,
    activo boolean default true,
    paciente varchar(15)
) engine =innodb;

alter table Cita
add constraint paciente_fk
foreign key (paciente)
REFERENCES Usuario (codUsuario);

