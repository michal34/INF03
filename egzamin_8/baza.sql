DROP DATABASE IF EXISTS biuro;

CREATE DATABASE biuro;

USE biuro;

CREATE TABLE zdjecia(
    id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nazwaPliku text,
    podpis text
);

CREATE TABLE wycieczki(
    id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    zdjecia_id int,
    CONSTRAINT zdjecia_id_zdjecia_id FOREIGN KEY (zdjecia_id) REFERENCES zdjecia(id),
    dataWyjazdu date,
    cel text,
    cena double,
    dostepna tinyint(1)
);

INSERT INTO zdjecia (nazwaPliku, podpis) VALUES ('paryż', 'paryzPodpis'), ('warszawa', 'warszawaPodpis');
INSERT INTO wycieczki (zdjecia_id, dataWyjazdu, cel, cena, dostepna) VALUES (1, '2023-06-12', 'zwiedzanie', 1000, 1),(2, '2023-06-12', 'zwiedzanie', 1300, 1);
