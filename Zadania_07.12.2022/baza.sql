CREATE DATABASE zadanie;
USE zadanie;

CREATE TABLE Kategorie_ocen(
    Id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Kategoria VARCHAR(20) NOT NULL
);

CREATE TABLE Oceny(
    Id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Ocena VARCHAR(3) NOT NULL,
    Kategoria_oceny INTEGER NOT NULL,
    FOREIGN KEY (Kategoria_oceny) REFERENCES Kategorie_ocen(id),
    Data_dodania DATE,
    Numer_w_dzienniku INTEGER UNSIGNED NOT NULL
);

INSERT INTO Kategorie_ocen (Kategoria) VALUES ("aktywność"), ("kartkówka"), ("sprawdzian");