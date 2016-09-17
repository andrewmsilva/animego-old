create table competidor (
	id integer unsigned not null primary key auto_increment,
	nome varchar(40) not null,
	cpf varchar(11) not null unique,
	email varchar(30) not null unique,
	personagem varchar(30) not null,
	anime varchar(50) not null
);