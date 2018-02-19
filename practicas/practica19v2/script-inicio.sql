USE tienda;
CREATE TABLE carrito(
  id_cliente INT,
  id_articulo INT,
  cantidad INT,
  CONSTRAINT carrito_pk PRIMARY KEY(id_cliente,id_articulo),
  CONSTRAINT carrito_fk1  FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente),
  CONSTRAINT carrito_fk2  FOREIGN KEY(id_articulo) REFERENCES ratones(id_articulo)
);

INSERT INTO clientes(id_cliente, nombre, apellido1, apellido2, usuario, password)
VALUES (1,'Pedro','Gómez','Manrique','pedro','12345');

CREATE USER tienda@localhost IDENTIFIED BY '12345';
GRANT SELECT,INSERT,DELETE,UPDATE ON tienda.* TO tienda@localhost;
