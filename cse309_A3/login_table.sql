-- Active: 1690202217048@@127.0.0.1@3306@info
CREATE Table login_table(

    ID INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Name    VARCHAR(255),
    Email   VARCHAR(255),
    Password   VARCHAR(255),
    Massage VARCHAR(255)

);

SELECT * FROM login_table