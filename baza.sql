DROP DATABASE baza;

CREATE DATABASE baza;

USE baza;

CREATE TABLE lokale (
    Id INTEGER PRIMARY KEY,
    nazwa TEXT,
    miasto TEXT,
    ulica TEXT,
    numer INTEGER
);

CREATE TABLE dania (
    Id INTEGER PRIMARY KEY,
    typ INTEGER,
    nazwa TEXT,
    cena INTEGER
);

CREATE TABLE rezerwacje (
    Id INTEGER PRIMARY KEY,
    nr_stolika INTEGER,
    data_rez DATE,
    liczba_osob INTEGER,
    telefon TEXT
);

CREATE TABLE pracownicy (
    Id INTEGER PRIMARY KEY,
    imie TEXT,
    nazwisko TEXT,
    stanowisko INTEGER
);
