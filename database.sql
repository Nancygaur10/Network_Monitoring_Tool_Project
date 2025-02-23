-- Create database
CREATE DATABASE NMT;
USE NMT;

-- Create Table
CREATE TABLE login (
        email varchar(50) PRIMARY KEY,
        password varchar(50) NOT NULL
        );

-- Enter details in the table
INSERT INTO login (email, password) VALUES (your_email, your_password);