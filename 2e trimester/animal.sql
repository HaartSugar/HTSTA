drop database AnimasInsert;
create database AnimasInsert;
use AnimasInsert;

create table Animals(
    AnimalId INT NOT NULL AUTO_INCREMENT,
    AnimalName VARCHAR(20) UNIQUE,
    Continent VARCHAR(20),
    primary key (AnimalId)
);