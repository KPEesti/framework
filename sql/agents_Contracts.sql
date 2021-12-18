drop table agents_Contracts;

create table agents_Contracts(
                                 Contract_ID int not null primary key auto_increment,
                                 Agent varchar(255) not null,
                                 Apart_ID int not null unique ,
                                 Award_Type varchar(255) not null check (Award_Type in ('FIX', 'PERCENT')),
                                 FIX_AWARD int check (FIX_AWARD >= 0 and FIX_AWARD <= 1000000),
                                 PERCENT_AWARD decimal(10, 2) check (PERCENT_AWARD >= 0 and PERCENT_AWARD <= 10),
                                 Conclusion_Date date not null,
                                 Expiration_Date date not null,
                                 CONSTRAINT FK_ApartID
                                     foreign key (Apart_ID)
                                         references apartment(Apart_ID)
) ENGINE=InnoDB;

insert into agents_Contracts (Agent, Apart_ID, Award_Type, FIX_AWARD, PERCENT_AWARD, Conclusion_Date, Expiration_Date)
VALUES
    ('Петров Пётр Петрович', 1, 'FIX', 75000, null, '2021-11-10', '2022-11-10'),
    ('Иванов Иван Иванович', 2, 'PERCENT', null, 5.5, '2021-11-12', '2022-11-12'),
    ('Григорьев Григорий Григорьевич', 3, 'FIX', 100000, null, '2021-11-15', '2022-11-15');

/*Тестовый вариант для проверки связанности таблиц*/
insert into agents_Contracts (Agent, Apart_ID, Award_Type, FIX_AWARD, PERCENT_AWARD, Conclusion_Date, Expiration_Date)
VALUES
    ('Петров Григорий Петрович', 10000, 'FIX', 45000, null, '2021-12-10', '2022-12-10');