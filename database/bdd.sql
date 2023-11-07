DROP DATABASE IF EXISTS cours_simple_mvc;
CREATE DATABASE cours_simple_mvc;

use cours_simple_mvc;

CREATE TABLE contact (
    id INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(140) NOT NULL,
    content TEXT NOT NULL,
    datetime DATETIME NOT NULL DEFAULT NOW(),
    PRIMARY KEY (id)
);
