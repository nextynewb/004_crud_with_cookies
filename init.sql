CREATE DATABASE example_4_db;

USE example_4_db;

CREATE TABLE customer (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    phone VARCHAR(255), 
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);

-- Insert sample Malaysian customer data
INSERT INTO customer (id, name, email, phone, username, password) VALUES 
(1, 'Ahmad bin Abdullah', 'ahmad@example.com', '012-3456789', 'ahmad123', 'password123'),
(2, 'Siti Nurhaliza', 'siti@example.com', '019-8765432', 'siti_nur', 'secure456'),
(3, 'Tan Wei Ming', 'tanwm@example.com', '016-7894561', 'weiming', 'ming789'),
(4, 'Rajesh Kumar', 'rajesh@example.com', '013-5557777', 'rajeshk', 'kumar123'),
(5, 'Nurul Huda', 'nurul@example.com', '014-9998888', 'nurul_h', 'huda456'),
(6, 'Lee Chong Wei', 'leecw@example.com', '017-1112222', 'chongwei', 'badminton789'),
(7, 'Kavitha Krishnan', 'kavitha@example.com', '011-3334444', 'kavitha_k', 'krish123'),
(8, 'Muhammad Zikri', 'zikri@example.com', '018-6667777', 'zikri_m', 'zikri456'),
(9, 'Wong Mei Ling', 'meiling@example.com', '019-2223333', 'meiling', 'wong789'),
(10, 'Amir Hamzah', 'amir@example.com', '012-8889999', 'amir_h', 'hamzah123');
