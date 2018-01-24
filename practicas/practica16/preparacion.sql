CREATE USER palabras@localhost IDENTIFIED BY '12345';

CREATE DATABASE palabras;

GRANT ALL ON palabras.* TO palabras@localhost;

USE palabras;

CREATE TABLE palabras(
  palabra VARCHAR(50) PRIMARY KEY
) ;