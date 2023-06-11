DROP DATABASE IF EXISTS malarz;

CREATE DATABASE malarz;

USE malarz;

CREATE TABLE farby (
  id_farby INT PRIMARY KEY,
  kolor VARCHAR(255),
  cena INT,
  pojemnosc INT
);

INSERT INTO farby (id_farby, kolor, cena, pojemnosc)
VALUES
  (1, 'bialy', 20, 5),
  (2, 'czerwony', 30, 3),
  (3, 'niebieski', 35, 3),
  (4, 'żółty', 22, 4),
  (5, 'zielony', 30, 4),
  (6, 'czarny', 50, 2),
  (7, 'fioletowy', 64, 3);


CREATE TABLE malowanie (
  id_pomieszczenia INT ,
  id_sciany INT PRIMARY KEY,
  id_farby INT,
  liczba_puszek INT,
  FOREIGN KEY (id_farby) REFERENCES farby (id_farby)
);

