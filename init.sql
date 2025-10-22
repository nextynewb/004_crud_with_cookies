CREATE DATABASE example_4_db;

USE example_4_db;

CREATE TABLE customer (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255), 
    username VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO customer (id, name, email, phone, username, password) VALUES (1, 'John Doe', 'john.doe@example.com', '1234567890', 'john_doe', 'password'); 
INSERT INTO customer (id, name, email, phone, username, password) VALUES (2, 'Jane Doe', 'jane.doe@example.com', '0987654321', 'jane_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (3, 'Jim Doe', 'jim.doe@example.com', '1111111111', 'jim_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (4, 'Jill Doe', 'jill.doe@example.com', '2222222222', 'jill_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (5, 'Jack Doe', 'jack.doe@example.com', '3333333333', 'jack_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (6, 'Jill Doe', 'jill.doe@example.com', '4444444444', 'jill_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (7, 'Jack Doe', 'jack.doe@example.com', '5555555555', 'jack_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (8, 'Jill Doe', 'jill.doe@example.com', '6666666666', 'jill_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (9, 'Jack Doe', 'jack.doe@example.com', '7777777777', 'jack_doe', 'password');
INSERT INTO customer (id, name, email, phone, username, password) VALUES (10, 'Jill Doe', 'jill.doe@example.com', '8888888888', 'jill_doe', 'password');    
