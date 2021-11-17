create table apartment_Contracts(
    Apart_Id int(11) not null primary key AUTO_INCREMENT,
    Apart_Cost decimal(10,2) not null,
    Apart_Addres varchar(255) not null,
    Contract_Status boolean not null
) ENGINE=InnoDB;

create table agents(
    Agent_Id int(11) not null primary key AUTO_INCREMENT,
    Agent_Name varchar(255) not null
) ENGINE=InnoDB;

create table agents_Contracts(
    Contract_Id int(11) not null AUTO_INCREMENT primary key,
    Agent_Id int(11) not null,
    Apart_Id int(11) not null,
    Conclusion_Date DATETIME not null,
    Expiration_Date DATETIME not null,
    Comm_Type boolean not null,
    Comm_AMT decimal(10, 2) not null,
    constraint FK_AgentID
        foreign key (Agent_Id)
        references agents(Agent_Id),
    constraint FK_ApartID
        foreign key (Apart_Id)
        references apartment_Contracts(Apart_Id)
) ENGINE=InnoDB;

insert into apartment_Contracts (Apart_Cost, Apart_Addres, Contract_Status)
VALUES
    (51000, 'г. Екатеринбург ул.Родонитовая 20 кв 120', true),
    (48000, 'г. Екатеринбург ул.Родонитовая 20 кв 121', false),
    (34000, 'г. Екатеринбург ул.Родонитовая 20 кв 122', false),
    (51000, 'г. Екатеринбург ул.Родонитовая 20 кв 123', true);

insert into agents (Agent_Name)
values
    ('Григорий Парамонов'),
    ('Иван Петров'),
    ('Петр Пригожин'),
    ('Дмитрий Мартынов'),
    ('Алексей Фомин'),
    ('Михаил Ковач');

insert into agents_Contracts
    (Agent_Id, Apart_Id, Conclusion_Date, Expiration_Date, Comm_Type, Comm_AMT)
values
    (1, 2, '2021-11-11', '2022-11-11', false, 10000),
    (4, 1, '2021-11-11', '2022-11-11', true, 10000),
    (5, 3, '2021-11-11', '2022-11-11', false, 1000),
    (2, 4, '2021-11-11', '2022-11-11', false, 1250.25);