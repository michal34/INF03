DROP DATABASE IF EXISTS ogloszenia;

CREATE DATABASE ogloszenia;

USE ogloszenia;

CREATE TABLE uzytkownik(
    id INTEGER PRIMARY KEY NOT NULL,
    imie TEXT NULL,
    nazwisko TEXT NULL,
    telefon TEXT NULL,
    email TEXT NULL
);

CREATE TABLE kategoria(
    id INTEGER PRIMARY KEY NOT NULL,
    uzytkownik_id integer,
    kategoria integer NOT NULL,
    podkategoria integer NOT NULL,
    tytul TEXT NULL,
    tresc TEXT NULL,
    CONSTRAINT ogloszenia_FK FOREIGN KEY (uzytkownik_id) REFERENCES uzytkownik(id)
);