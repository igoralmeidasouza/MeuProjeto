create database dbProdutos CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbProdutos;

create table tbprodutos(
idProd int not null auto_increment,
nomeProd varchar(100),
descricao varchar(100),
marca varchar(100),
preco decimal(15,2),
primary key(idProd))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;