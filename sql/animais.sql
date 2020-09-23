drop database if exists animais;
create database if not exists animais;

use animais;




create table animal (
				
                id int auto_increment,
                nome varchar (80),
                tipo varchar (100),
				raca varchar(50),
                 nome_dono varchar(50),
				rg_dono varchar(20),
				
				PRIMARY KEY (id, rg_dono)
               
                
                

)engine = innoDB;

select * from animal;





