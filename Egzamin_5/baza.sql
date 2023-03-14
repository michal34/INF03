DROP DATABASE IF EXISTS sklep;

CREATE DATABASE sklep;

USE sklep;

CREATE TABLE towary(
    id INT(11),
    nazwa VARCHAR(20),
    cena FLOAT,
    promocja TINYINT(1),
    idDostawcy INT(11)
);

CREATE TABLE dostawcy(
    id INT(11),
    nazwa VARCHAR(50),
    adres VARCHAR(50)
)

INSERT INTO dostawcy (id,nazwa,adres) VALUES (1,'Dostawca 1','ul. Dostawcza 1');
INSERT INTO dostawcy (id,nazwa,adres) VALUES (2,'Dostawca 2','ul. Dostawcza 2');
INSERT INTO dostawcy (id,nazwa,adres) VALUES (3,'Dostawca 3','ul. Dostawcza 3');

INSERT INTO towary VALUES (1, 'Gumka do mazania', 5, 1, 1);
INSERT INTO towary VALUES (2, 'Cyrkiel', 10, 0, 2);
INSERT INTO towary VALUES (3, 'Linijka', 7, 0, 3);
INSERT INTO towary VALUES (4, 'Ołówek', 2, 1, 1);
INSERT INTO towary VALUES (5, 'Zeszyt', 10, 5, 2);