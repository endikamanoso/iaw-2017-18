CREATE DATABASE cursos;

CREATE USER cursos@localhost IDENTIFIED BY '123456';

GRANT ALL ON cursos.* TO cursos@localhost;

USE cursos;

CREATE TABLE cursos(
  codigo INT,
  titulo VARCHAR(50) NOT NULL,
  plazas INT NOT NULL CHECK(plazas>=0),
  CONSTRAINT cursos_pk PRIMARY KEY(codigo)
);

INSERT INTO cursos VALUES(302,'Programacion C',16);
INSERT INTO cursos VALUES(698,'HTML 5',16);
INSERT INTO cursos VALUES(806,'Adobe Ilustrator',16);
INSERT INTO cursos VALUES(391,'Programación Java',16);
INSERT INTO cursos VALUES(808,'Adobe premiere Pro',16);
INSERT INTO cursos VALUES(805,'Adobe photoshop',16);
INSERT INTO cursos VALUES(390,'Programacion C++',16);
INSERT INTO cursos VALUES(500,'Redes avanzadas',16);
INSERT INTO cursos VALUES(231,'Red Hat Linux Server',16);
INSERT INTO cursos VALUES(807,'Adobe InDesign',16);
INSERT INTO cursos VALUES(900,'Diseño Gráfico',16);
INSERT INTO cursos VALUES(123,'Windows Server 2012 R2',16);

