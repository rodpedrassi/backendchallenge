create database webchallenge;

use webchallenge;

create table usuarios(
id int not null auto_increment primary key,
email varchar(50) not null,
senha varchar(32) not null);