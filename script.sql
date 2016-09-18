drop database animego;
create database animego;
use animego;
create table atracao (
	id integer unsigned not null primary key auto_increment,
	nome varchar(40) not null,
	valor double null
);

insert into atracao values(null,"Competição de Cosplays",0);
insert into atracao values(null,"Animekê",0);
insert into atracao values(null,"Workshop de Culinária Oriental",20);
insert into atracao values(null,"Workshop de Japonês",5);
insert into atracao values(null,"Workshop de Inglês",5);

create table usuario (
	id integer unsigned not null primary key auto_increment,
	nome varchar(40) not null,
	email varchar(30) not null unique,
	telefone varchar(10) not null,
	senha varchar(50) not null,
	permissao integer(1) not null
);

insert into usuario values(null,"Equipe AnimeGo!","root@animego.com","123","21eb94f9bb25cf2d15d03b718d092df9",1);

create table inscricao (
	id integer unsigned not null primary key auto_increment,
	usuario_id integer unsigned not null,
	foreign key (usuario_id) references usuario(id),
	atracao_id integer unsigned not null,
	foreign key (atracao_id) references atracao(id),
	sugestao varchar(200)
);

create table cosplay (
	id integer unsigned not null primary key auto_increment,
	inscricao_id integer unsigned not null,
	foreign key (inscricao_id) references inscricao(id),
	personagem varchar(30) not null,
	anime varchar(50) not null
);