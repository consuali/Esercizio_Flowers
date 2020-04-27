create table occasions(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    description TEXT,
    created datetime,
    modified datetime
    );

 CREATE TABLE flowers(
       id int not null AUTO_INCREMENT PRIMARY KEY,
         name varchar(32) not null,
        occasion_id int,
        price float,
        qty int,
        foreign key (occasion_id) references occasions (id) on delete restrict on update cascade
         );
