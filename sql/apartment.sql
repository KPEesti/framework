drop table apartment;

create table apartment(
    Apart_ID int primary key not null auto_increment,
    Apart_Cost int not null,
    Apart_Num int not null,
    ResComplex varchar(255) not null
) ENGINE=InnoDB;

insert into apartment (Apart_Cost, Apart_Num, ResComplex)
values
    (10000000, 134, 'Зелёная роща'),
    (5000000, 123, 'Зелёная роща'),
    (4000000, 19, 'Янтарный берег'),
    (4000000, 20, 'Янтарный берег');


select * from apartment where Apart_ID = 10;