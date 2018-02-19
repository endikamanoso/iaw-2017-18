CREATE DATABASE tareas;

USE TAREAS;

CREATE TABLE tareas(
  id_tarea int AUTO_INCREMENT primary key,
  nombre varchar(50) unique,
  acabada boolean
);


CREATE USER tareas@localhost IDENTIFIED BY '12345';

GRANT SELECT,UPDATE,DELETE,INSERT ON tareas.* TO tareas@localhost;