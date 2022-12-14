CREATE DATABASE Restaurants
USE Restaurants

CREATE TABLE Restaurant(
    Id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Name VARCHAR(30) NOT NULL,
    City VARCHAR(30) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    Postal_code INT VARCHAR(6) NOT NULL, 
)

CREATE TABLE Employee(
    Id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Name VARCHAR(60) NOT NULL,
    Surname VARCHAR(60) NOT NULL,
    Role_id INT NOT NULL,
    Pesel VARCHAR(11) NOT NULL,
    Employee_roles INT FOREING KEY REFERENCES Role(id) NOT NULL,
)

CREATE TABLE Restaurant_Emoloyee(
    Restaurant_id INT,
    Employee_id INT,
    Restaurant_id INT FOREING KEY REFERENCES Restaurant(id) NOT NULL,
    Employee_id INT FOREING KEY REFERENCES Employee(id) NOT NULL,
    Role_id INT FOREING KEY REFERENCES Role(id),
)

CREATE TABLE Role(
    Id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Name VARCHAR(50) NOT NULL,
)

CREATE TABLE Reservation(
    Id INT AUTO_INCREMENT NOT NULL,
    Phone VARCHAR(12) NOT NULL,
    Surname VARCHAR(50) NOT NULL,
    Guests INT NOT NULL,
    Date DATETIME NOT NULL,
    Restaurant_id INT FOREING KEY REFERENCES Restaurant(Id) NOT NULL,
)

CREATE TABLE Meal(
    Id INT PRIMARY KEY NOT NULL,
    Name VARCHAR(50) NOT NULL,
    Price REAL NOT NULL,
    Meal_type INT FOREING KEY REFERENCES Meal_type(Id) NOT NULL, 
)

CREATE TABLE Meal_type(
    Id INT PRIMARY KEY NOT NULL,
    Name VARCHAR(50) NOT NULL
)