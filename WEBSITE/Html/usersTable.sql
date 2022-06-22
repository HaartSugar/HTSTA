drop database Shop;

create database Shop;
use Shop;

create table Users(
    UserId int NOT NULL AUTO_INCREMENT,

    UserName VARCHAR(30) UNIQUE,
    UserPassword VARCHAR(255),
    Primary Key (UserId)
)