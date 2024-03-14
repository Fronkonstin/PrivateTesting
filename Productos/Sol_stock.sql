Drop database if EXISTS Sol;

CREATE DATABASE Sol;

USE Sol;

CREATE TABLE Alimentos (
marca VARCHAR(30),
stock float,
primary key (marca)
);

CREATE TABLE Salsas (
marca VARCHAR(30),
stock float,
primary key (marca)
);

CREATE TABLE Dulces (
marca VARCHAR(30),
stock float,
primary key (marca)
);

CREATE TABLE Bebidas (
marca VARCHAR(30),
stock float,
primary key (marca)
);

CREATE TABLE Menaje (
marca VARCHAR(30),
stock float,
primary key (marca)
);

insert into Alimentos values ('Dashi Kombu algas bolsa', 10, 3);
insert into Alimentos values ('Sun Clad arroz bolsa', 10, 2);
insert into Alimentos values ('Soubry fideos bolsa', 10, 2);
insert into Alimentos values ('Dim Sum gyoza de carne pack', 10, 7);
insert into Alimentos values ('Sushi Natsu sushi pack', 10, 8);

insert into Salsas values ('Gren Thai curry bolsa', 10, 4);
insert into Salsas values ('Aroy-D leche coco lata', 10, 3);
insert into Salsas values ('Kikkoman soya bote', 10, 4);
insert into Salsas values ('SK wasabi tubo', 10, 4);

insert into Dulces values ('Marukyo dorayaki pack', 10, 3);
insert into Dulces values ('Anekzuko mochi pack', 10, 3);
insert into Dulces values ('Glica pocky caja', 10, 2);

insert into Bebidas values ('Mogu Mogu sabores pack', 10, 3);
insert into Bebidas values ('Ocean Bomb bulbasur', 10, 1);
insert into Bebidas values ('Ocean Bomb charmander', 10, 1);
insert into Bebidas values ('Ocean Bomb pikachu', 10, 1);
insert into Bebidas values ('Ocean Bomb squirtle', 10, 1);
insert into Bebidas values ('Tabota sake', 10, 9);

insert into Menaje values ('Cuencos y palillos pack', 10, 10);
insert into Menaje values ('Set platos sushi y palillos', 10, 11);
insert into Menaje values ('Set palillos 2', 10, 3);
insert into Menaje values ('Set palillos 5', 10, 5);
insert into Menaje values ('Vasos sake pack', 10, 10);