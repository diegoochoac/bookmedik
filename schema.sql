/*
* SISINFALCALDIAJAMUNDI Database
* @author DiegoOchoa
*/
create database sisinfoaj;
use sisinfoaj; 
set sql_mode='';

create table userA (
	id int not null auto_increment primary key,
	username varchar(50),
	name varchar(50),
	lastname varchar(50),
	email varchar(255),
	type_document varchar(70),
	document varchar(50),
	password varchar(60),
	is_active boolean not null default 1,
	is_admin boolean not null default 0,
	created_at datetime
);

create table pacient (
	id int not null auto_increment primary key,
	no varchar(50),
	type_document varchar(70),
	document varchar(50),
	first_name varchar(50),
	second_name varchar(50),
	first_lastname varchar(50),
	second_lastname varchar(50),
	gender varchar(1),
	day_of_birth date,
	email varchar(255),
	address varchar(255),
	phone varchar(255),
	image varchar(255),
	sick varchar(500),

	is_favorite boolean not null default 1,
	is_active boolean not null default 1,
	created_at datetime
);



insert into userAdmin (username,password,is_admin,is_active,created_at) value ("admin",sha1(md5("admin")),1,1,NOW());
