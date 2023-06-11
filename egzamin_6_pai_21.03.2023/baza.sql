DROP DATABASE IF EXISTS sklep;

CREATE DATABASE sklep;

USE sklep;

CREATE TABLE producenci(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nazwa TEXT,
    opis TEXT
);

CREATE TABLE typy(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kategoria TEXT
);

CREATE TABLE podzespoly(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    typy_id INTEGER,
    producenci_id INTEGER,
    nazwa TEXT,
    opis TEXT,
    dostepnosc BOOLEAN,
    cena FLOAT,
    FOREIGN KEY (typy_id) REFERENCES typy(id),
    FOREIGN KEY (producenci_id) REFERENCES producenci(id)
);


INSERT INTO typy (kategoria) VALUES ('procesor');
INSERT INTO producenci (nazwa, opis) VALUES ('INTEL CORE I9', 'SUPER PROCESOR');
INSERT INTO podzespoly (typy_id, producenci_id, nazwa, opis, dostepnosc, cena) 
VALUES (1, 1, "CORE I9", "SUPER PROCESOR TEST", true, '4000.99');