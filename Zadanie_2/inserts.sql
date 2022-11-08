INSERT INTO DESK (Number, busy) VALUES 
(1, 'zajęty'),
(2, 'zajęty'),
(3, 'wolny')

INSERT INTO Address (City, Street, Postal_code, Building_number) VALUES 
('Warszawa', 'Prosta', '01-100', '120/4E'),
('Gdańsk', 'Krzywa', '08-758', '10')

INSERT INTO restaurant (Name, Address, phone_number) VALUES
('Dobre jedzenie', 1, '+48123456789'),
('Super ryby', 2, '+48098765432')

INSERT INTO reservation (restaurant_id, date, number_of_people, table_id) VALUES
(1, '2022-11-12', 4, 1),
(2, '2022-10-10', 5, 2)

INSERT INTO meal_type (type) VALUES
('Mięsne'),
('Wegetariańskie')

INSERT INTO meal (name, price, meal_type) VALUES
('Pierogi z mięsem', 17.99, 1),
('Makaron', 29.99, 2)

INSERT INTO restaurant_meal (meal_id, restaurant_id) VALUES
(1, 1),
(2, 2)

INSERT INTO role (name) VALUES 
('Kelner'),
('Kucharz')

INSERT INTO employee (first_name, second_name, pesel, phone_number) VALUES
('Adam', 'Nowak', '12345678901', '+48123123123'),
('Paweł', 'Kowalski', '09876543215', '+48567483275'),
('Mateusz', 'Wiśniewski', '12312312300', '+48123123123')

INSERT INTO employee_role (role_id, employee_id) VALUES
(1,1),
(2,2)

INSERT INTO restaurant_employee (Restaurant_id, employee_id) VALUES
(1,1),
(2,2),
(1,2)

INSERT INTO account (first_name, second_name, phone_number, email) VALUES
('Adam', 'Kowalski', '+48234567432', 'adam@gmail.com'),
('Oskar', 'Nowak', '+48123123123', 'nowak@gmail.com')

INSERT INTO account_bill (restaurant_id, account_id, total_price) VALUES
(1, 1, 300),
(2, 2, 100)

INSERT INTO user_order (meal_id, account_bill_id) VALUES
(1,1),
(2,2)

INSERT INTO dynamic_pricing (account_id, meal_id, discount) VALUES
(1, 1, 1.12),
(2, 2, 4.14)