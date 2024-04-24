create database calmind;
use calmind;

create table cadastros(
id_usu int primary key auto_increment,
nome varchar (255) unique not null,
cpf char (11) unique not null,
telefone char (11) unique,
email varchar (150) unique not null,
senha varchar (100) not null
);

select * from cadastros;

CREATE TABLE mensagens_suporte (
    id_mensagem INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(150) NOT NULL,
    mensagem TEXT NOT NULL
);

select * from mensagens_suporte;