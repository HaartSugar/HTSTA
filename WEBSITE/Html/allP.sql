drop database lishaopeng;
create database lishaopeng;

use lishaopeng;



create table Users(
    UserId int NOT NULL AUTO_INCREMENT,
    UserName VARCHAR(30) UNIQUE,
    UserPassword VARCHAR(255),
     Primary Key (UserId)
);

CREATE TABLE Products (
    ProductsID int not null AUTO_INCREMENT,
    ProductsImage VARCHAR(20),
    ProductsPrice INTEGER(3),
     PRIMARY KEY (ProductsID)
    /*ProductsValue INTEGER(3),*/

);
CREATE TABLE languages (
    languagesID int not null AUTO_INCREMENT,
     PRIMARY KEY (languagesID),
    languagesName VARCHAR(20)
    
);

INSERT INTO languages(languagesName) VALUES("English");
INSERT INTO languages(languagesName) VALUES("Chinese");


INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product1.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product2.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product3.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product4.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product4.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product4.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product4.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product4.jpg",20);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product4.jpg",40);
INSERT INTO Products(ProductsImage,ProductsPrice) VALUES("product4.jpg",40);


CREATE TABLE descriptions (
    descriptionsID int not null AUTO_INCREMENT,
    ProductsName VARCHAR(100),
    ProductsID int not null,
    languagesID int not null,
    DescText VARCHAR(200),
     PRIMARY KEY (descriptionsID),
     foreign key (ProductsID) REFERENCES Products(ProductsID),
     foreign key (languagesID) REFERENCES languages(languagesID)
    
    
);

INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Truffle, scampi, green apple",1,1,"asdfdsaw");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",2,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",3,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",4,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",5,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",6,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",7,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",8,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",9,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("Risotto with Cime di rapa",10,1,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",1,2,"asdfdsaw");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",2,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",3,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",4,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",5,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",6,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",7,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",8,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",9,2,"wdfdsfsdf");
INSERT INTO descriptions(ProductsName,ProductsID,languagesID,DescText) VALUES("chine",10,2,"wdfdsfsdf");