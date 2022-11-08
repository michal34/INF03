SELECT * FROM reservation WHERE date > CURRENT_DATE

SELECT * FROM desk WHERE busy = 'wolny'

SELECT desk.id, desk.number, desk.busy FROM desk
INNER JOIN reservation ON reservation.table_id = desk.id

SELECT employee.first_name, employee.second_name, employee.pesel, employee.phone_number, restaurant.name, role.name FROM employee
JOIN restaurant_employee ON restaurant_employee.employee_id = employee.id
JOIN restaurant ON restaurant.id = restaurant_employee.restaurant_id
JOIN employee_role ON employee_role.employee_id = employee.id
JOIN role ON role.id = employee_role.role_id

SELECT * FROM employee
LEFT JOIN restaurant_employee ON restaurant_employee.employee_id = employee.id
WHERE restaurant_employee.id IS NULL

SELECT * FROM restaurant
CROSS JOIN employee