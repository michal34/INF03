DROP DATABASE IF EXISTS wedkowanie;

CREATE DATABASE wedkowanie;

USE wedkowanie;

CREATE TABLE Ryby(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nazwa TEXT NOT NULL,
    wystepowanie TEXT NOT NULL,
    styl_zycia INTEGER NOT NULL
);

CREATE TABLE Okres_ochronny(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    Ryby_id INTEGER NOT NULL,
    FOREIGN KEY (Ryby_id)
    REFERENCES Ryby(id),
    od_miesiaca INTEGER NOT NULL,
    do_miesiaca INTEGER NOT NULL,
    wymiar_ochronny INTEGER NOT NULL
);

CREATE TABLE Lowisko(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    Ryby_id INTEGER NOT NULL,
    FOREIGN KEY (Ryby_id)
    REFERENCES Ryby(id),
    akwen TEXT NOT NULL,
    wojewodztwo TEXT NOT NULL,
    rodzaj INTEGER NOT NULL
);

INSERT INTO okres_ochronny (do_miesiaca, od_miesiaca, Ryby_id, wymiar_ochronny) VALUES(1, 10, 1, 20);

INSERT INTO ryby (dobowy_limit, nazwa,styl_zycia, wystepowanie)  VALUES (12, 'sum', 1, 'rzeki');

INSERT INTO lowisko(akwen, rodzaj, Ryby_id, wojewodztwo) VALUE ('bałtyk', 3, 1, 'mazowieckie');