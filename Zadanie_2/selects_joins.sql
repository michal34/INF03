-- wyświetlić wszystkie i rezerwacje jeśli istnieją
SELECT * FROM restaurant_table AS rt
JOIN Restaurant AS r ON r.id = rt.restaurant_id
JOIN Reservation AS rsv ON rsv.restaurant_table_id = rt.id


-- wyświetlić wszystkie stoliki, które nie mają rezerwacji
SELECT * FROM restaurant_table AS rt
JOIN Restaurant AS r ON r.id = rt.restaurant_id
LEFT JOIN Reservation AS rsv ON rsv.restaurant_table_id = rt.id
WHERE rsv.Restaurant_table_id is NULL

-- wyświetlić stoliki, które mają rezerwację w danej restauracji
SELECT * FROM restaurant_table AS rt
JOIN Restaurant AS r ON r.id = rt.restaurant_id
JOIN reservation AS rsv ON rsv.restaurant_table_id = rt.id
WHERE r.id = 1


-- wyświetlić wszystkich pracowników oraz ich dane dot. stanowiska i zatrudnienia w restauracjach
SELECT * FROM employee as e
JOIN restaurant_employee as re ON re.employee_id = e.id
JOIN restaurant AS r ON r.id = re.restaurant_id
JOIN employee_role as er ON er.employee_id = e.id
JOIN role ON role.id = er.role_id
WHERE r.id = 1


-- wyświetlić pracowników nigdzie nie zatrudnionych
SELECT * FROM employee
LEFT JOIN restaurant_employee ON restaurant_employee.employee_id = employee.id
WHERE restaurant_employee.id IS NULL


-- wyświetlić pracowników, którzy pracują w conajmniej 2 restauracjach
SELECT * FROM employee AS e
JOIN employee_role AS er ON er.employee_id = e.id
JOIN role ON role.id = er.role_id
JOIN restaurant_employee AS re ON re.employee_id = e.id
JOIN restaurant AS r ON r.id = re.restaurant_id
GROUP BY e.id
HAVING (COUNT(e.id) > 1)


-- cross join restauracji i pracowników
SELECT * FROM restaurant
CROSS JOIN employee