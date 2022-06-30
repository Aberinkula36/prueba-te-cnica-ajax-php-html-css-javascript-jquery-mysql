create database ajax;
use ajax;
create table usuarios(
				id int auto_increment,
                email varchar(100),
                password varchar(150),
                primary key(id)
					);