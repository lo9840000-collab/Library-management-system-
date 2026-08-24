CREATE DATABASE library_db;

USE library_db;

-- Admin Table
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO admin(username,password)
VALUES('admin','admin123');

-- Books Table
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    category VARCHAR(50),
    quantity INT NOT NULL
);

-- Students Table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100),
    usn VARCHAR(30),
    course VARCHAR(50)
);

-- Issued Books
CREATE TABLE issued_books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100),
    book_name VARCHAR(100),
    issue_date DATE,
    return_date DATE,
    status VARCHAR(20)
);