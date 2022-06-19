create database bd_anotacao;

use bd_anotacao;

create table usuario(
	id_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    foto varchar (100),
    primary key (id_usuario)
);

select * from usuario;

create table anotacao(
	id_anotacao int not null auto_increment,
    fk_usuario int not null,
    titulo varchar(90),
    anotacao text,
    data_cadastro date,
    primary key (id_anotacao),
    foreign key (fk_usuario) references usuario(id_usuario)
    );