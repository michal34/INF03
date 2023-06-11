DROP DATABASE IF EXISTS wedkarstwo;

CREATE DATABASE wedkarstwo;

USE wedkarstwo;

CREATE TABLE Lowisko(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	akwen TEXT,
	wojewodztwo TEXT,
	rodzaj INTEGER
);

CREATE TABLE Karty_wedkarskie(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	imie TEXT,
	nazwisko TEXT,
	adres TEXT,
	data_zezwolenia DATE,
	punkty INTEGER
);

CREATE TABLE Zawody_wedkarskie(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	Karty_wedkarskie_id INTEGER,
	FOREIGN KEY (Karty_wedkarskie_id) REFERENCES Karty_wedkarskie(id),
	Lowisko_id INTEGER,
	FOREIGN KEY (Lowisko_id) REFERENCES Lowisko(id),
	data_zawodow DATE,
	sedzia TEXT
)
