CREATE DATABASE bicis;

USE bicis;

CREATE TABLE tipos_bici(
  id_tipo SMALLINT,
  tipo VARCHAR(50) NOT NULL,
  CONSTRAINT tipos_bici_pk PRIMARY KEY(id_tipo),
  CONSTRAINT tipos_bici_uk UNIQUE(tipo)
);

CREATE TABLE marcas(
  id_marca SMALLINT,
  nombre VARCHAR(50) NOT NULL,
  CONSTRAINT marcas_pk PRIMARY KEY(id_marca),
  CONSTRAINT marcas_uk UNIQUE(nombre)
);


CREATE TABLE bicis(
  id_bici INT AUTO_INCREMENT,
  id_marca SMALLINT NOT NULL,
  modelo VARCHAR(100) NOT NULL,
  votos INT DEFAULT 0 NOT NULL,
  precio INT DEFAULT 500 NOT NULL,
  id_tipo SMALLINT NOT NULL,
  url VARCHAR(1000),
  imagen VARCHAR(100),
  CONSTRAINT bicis_pk PRIMARY KEY(id_bici),
  CONSTRAINT bicis_uk1 UNIQUE(modelo),
  CONSTRAINT bicis_fk1 FOREIGN KEY(id_tipo) REFERENCES tipos_bici(id_tipo),
  CONSTRAINT bicis_fk2 FOREIGN KEY(id_marca) REFERENCES marcas(id_marca)
);



INSERT INTO tipos_bici VALUES(1,'XC-Maratón');
INSERT INTO tipos_bici VALUES(2,'All Mountain');
INSERT INTO tipos_bici VALUES(3,'Enduro');
INSERT INTO tipos_bici VALUES(4,'XC');
INSERT INTO tipos_bici VALUES(5,'Descenso');
INSERT INTO tipos_bici VALUES(6,'Gravel');
INSERT INTO tipos_bici VALUES(7,'Trail');

INSERT INTO marcas VALUES(1,'Specialized');
INSERT INTO marcas VALUES(2,'Scott');
INSERT INTO marcas VALUES(3,'Mondraker');
INSERT INTO marcas VALUES(4,'Giant');
INSERT INTO marcas VALUES(5,'Cannondale');
INSERT INTO marcas VALUES(6,'Santa Cruz');
INSERT INTO marcas VALUES(7,'Lapierre');
INSERT INTO marcas VALUES(8,'Intense');
INSERT INTO marcas VALUES(9,'BMC');
INSERT INTO marcas VALUES(10,'Trek');
INSERT INTO marcas VALUES(11,'MMR');
INSERT INTO marcas VALUES(12,'Orbea');
INSERT INTO marcas VALUES(13,'BH');
INSERT INTO marcas VALUES(14,'Canyon');
INSERT INTO marcas VALUES(15,'Yeti');


INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(1,'Specialized S-Works Epic XTR Di2', 0, 9000, 1,'https://www.specialized.com/es/es/s-works-epic-xtr-di2/p/129015','specialized.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(2,'Scott Genius 700 Ultimate', 0, 9700, 2,'https://www.scott-sports.com/es/es/product/bicicleta-scott-genius-700-ultimate','scott.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(3,'Mondraker Foxy Carbon RR SL', 0, 8500, 2,'http://www.mondraker.com/be/en/2018-FOXY-CARBON-RR-SL','cannondale.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(4,'Giant XTC Advanced 29er 0', 0, 7199, 1,'https://www.giant-bicycles.com/es/xtc-advanced-29er-0','giant.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(5,'Cannondale Jekyll Carbon 1', 0, 7500, 3,'http://www.cannondale.com/en/USA/Bike/ProductDetail?Id=7d5b929c-b375-4d44-bf05-1b268f6d2649','cannondale.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(6,'Santa Cruz Nomad 4', 0, 10000, 3,'https://www.santacruzbicycles.com/es-ES/nomad','santa-cruz.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(7,'Lapierre XR 929 Ultimate', 0, 5800, 4,'https://shop.lapierrebikes.es/xr-929-ultimate','lapierre.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(8,'Intense Carbine', 0, 8900, 3,'https://eu.intensecycles.com/collections/enduro-race/products/carbine?variant=6916630478890','intense.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(9,'BMC Speedfox 01', 0, 7000, 1,'https://www.bmc-switzerland.com/sp-es/bicis/montana/trail-speedfox-01-one/','bmc.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(10,'Trek Session 9.9 DH 27.5 Race Shop Limited', 0, 8000, 5,'https://www.trekbikes.com/es/es_ES/bicicletas/bicicletas-de-monta%C3%B1a/bicicletas-de-descenso/session/session-9-9-dh-27-5-race-shop-limited/p/1176800-2018/?colorCode=red','trek.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(14,'Canyon LUX CF 9.0 Pro Race team', 0, 5999, 1,'https://www.canyon.com/es/mtb/lux/lux-cf-9-0-pro-race-team.html','canyon.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(15,'Yeti SB5.5 X01 Eagle 2017m', 0, 7100, 3,'http://www.yeticycles.com/bikes/sb55','yeti.jpg');
INSERT INTO bicis(id_marca, modelo, votos, precio, id_tipo,url,imagen)
  VALUES(12,'Orbea Rallon M-LTD', 0, 7800, 3,'https://www.orbea.com/es-es/bicicletas/rallon-m-ltd-18','orbea.jpg');




CREATE USER bicis@localhost IDENTIFIED BY '12345';

GRANT INSERT,UPDATE,DELETE,SELECT ON bicis.* TO bicis@localhost;



SELECT m.nombre as marca,b.modelo as modelo,b.votos as votos,
b.precio as precio,t.tipo as tipo,b.url as url,b.imagen as imagen
FROM bicis b
JOIN marcas m USING(id_marca)
JOIN tipos_bici t USING(id_tipo);