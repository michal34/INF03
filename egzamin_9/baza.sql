DROP DATABASE IF EXISTS hotel;

CREATE DATABASE hotel;

USE hotel;

CREATE TABLE pokoj (
    id int PRIMARY KEY AUTO_INCREMENT,
    numer text,
    cena int,
    dataWynajmu date
)
