CREATE DATABASE tienda;

USE tienda;



CREATE TABLE ratones (
  id_articulo INT AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  precio decimal(11,2) NOT NULL,
  descripcion VARCHAR(1000),
  resolucion INT,
  wireless BIT,
  imagen_grande VARCHAR(100),
  image_peque VARCHAR(100),
  image_d1 VARCHAR(100),
  image_d2 VARCHAR(100),
  image_d3 VARCHAR(100),
  CONSTRAINT ratones_pk PRIMARY KEY(id_articulo),
  CONSTRAINT ratones_uk1 UNIQUE(nombre)
);



CREATE TABLE clientes(
  id_cliente INT AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL,
  apellido1 VARCHAR(30) NOT NULL,
  apellido2 VARCHAR(30),
  usuario VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  CONSTRAINT clientes_pk PRIMARY KEY(id_cliente),
  CONSTRAINT clientes_uk1 UNIQUE(usuario)
);



Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('Logitech G602','71','<strong>Construcción ultrarresistente</strong><br>G602 se ha creado para superar condiciones de juego extremas gracias a unos conmutadores mecánicos primarios mejorados capaces de producir hasta 20 millones de clics<br><strong>Indicador de carga de pilas</strong><br>No vuelva a quedarse sin carga en las pilas. El LED de estado de las pilas avisa si la carga es baja<br><strong>Tecnología de sensor Delta Zero</strong><br>Gracias al diseño de lente, la geometría de iluminación y los algoritmos exclusivos, disfrutará de un ahorro de energía optimizado y de un control del cursor de máxima precisión.<br>',2500,1,'G602Grande.png','G602Peq.png','G601D1.jpg','G601D2.jpg','G601D3.jpg');
Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('Logitech G700S','94','<strong>13 botones programables</strong><br>La configuración de fábrica ofrece excelentes resultados. También se pueden configurar activadores que funcionen con sólo pulsar un botón, en lugar de tener que rebuscar en los menús para encontrar una opción. Tenga a su alcance las comunicaciones activadas mediante una pulsación. Reduzca temporalmente el valor de dpi para apuntar y disparar. Reasigne cualquier comando de juego o macro multicomando a cualquiera de los 13 botones programables con Logitech Gaming Software (LGS), opcional.<br><strong>Velocidad de respuesta fiable, con o sin cables</strong><br>Cada comando se ejecutará tan rápidamente como sea posible. G700s mantiene una velocidad de respuesta de 1 ms<br>',2500,1,'G700SGrande.png','G700SPeq.png','G700SD1.jpg','G700SD2.jpg','G700SD3.jpg');
Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('Logitech Performance MX','76','<strong>13 botones programables</strong><br>La configuración de fábrica ofrece excelentes resultados. También se pueden configurar activadores que funcionen con sólo pulsar un botón, en lugar de tener que rebuscar en los menús para encontrar una opción. Tenga a su alcance las comunicaciones activadas mediante una pulsación. Reduzca temporalmente el valor de dpi para apuntar y disparar. Reasigne cualquier comando de juego o macro multicomando a cualquiera de los 13 botones programables con Logitech Gaming Software (LGS), opcional.<br><strong>Velocidad de respuesta fiable, con o sin cables</strong><br>Cada comando se ejecutará tan rápidamente como sea posible. G700s mantiene una velocidad de respuesta de 1 ms<br>',2500,1,'mxGrande.png','mxPeq.png','MXD1.jpg','MXD2.jpg','MXD3.jpg');
Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('MadCatz R.A.T. 5','61','Con el ratón Cyborg R.A.T. 5, el poder se instala en la palma de tu mano. El R.A.T. 5 alcanza hasta 4000 dpi, y la precisión es excepcional. Este ratón gaming propone 15 comandos programables, y dispone de 5 botones programablesy 3 modos cyborg para una reactividad ejemplar. Vía el programa ST, es posible crear sus propios macros.',4000,0,'rat5Grande.png','rat5Peq.png','rat5D1.jpg','rat5D2.jpg','rat5D3.jpg');
Insert into ratones(nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('MadCatz R.A.T. 9','118','El ratón inalámbrico Cyborg R.A.T. 9 de Mad Catz está diseñado para los gamers profesionales y es un arma de juego difícil de vencer! El R.A.T 9 presenta un tiempo de respuesta alucinante de 1 ms y funciona gracias a la tecnología inalámbrica 2,4 GHz. Sus 18 mandos, con 6 botones programables permiten cambiar entre 3 modos R.A.T., cambiar la sensibilidad o lanzar apuestas y acciones en las campañas de juegos. El ratón Cyborg RAT 9 ofrece además de un sensor láser de 6400 dpi ajustable en 4 niveles, un modo Tiro de precisión y un soporte de pulgar ajustable.<br>',6400,1,'rat9Grande.png','rat9Peq.png','rat9D1.jpg','rat9D2.jpg','rat9D3.jpg');
Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('Razer New Naga','84','<strong>Gran rendimiento</strong><br>Aceleración máxima de 50 G, 1000 informes por segundo, 200 pulgadas por segundo<br><strong>Características</strong><br>Botones programables, rueda de desplazamiento iluminada, retroiluminación, rueda de desplazamiento (4 direcciones), función macro, iluminación, LED verdes, Botones de hiper respuesta, Zero-acoustic Ultraslick, cable trenzado, Tecnología de Detección de Movimiento:Laser, Resolución de movimiento:8200 ppp, Interfaz:USB, Cables incluidos:1 x cable USB - integrado - 2.1 m, Compatible with Windows 7:Aplicaciones y dispositivos  llevan aseguramiento de Microsoft que estos productos fueron sometidos a tests para compatibilidad y fiabilidad con 32-bit y 64-bit Windows 7<strong>Interfaces</strong><br>1 x USB - 4 PIN USB tipo A, Detalles de los requisitos del sistema:- HD 100 MB<br>',6400,0,'nagaGrande.png','nagaPeq.png','nagaD1.jpg','nagaD2.jpg','nagaD3.jpg');
Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('Razer Mamba','112','<strong>Gran rendimiento</strong><br>El nuevo Razer Mamba vuelve con un sistema de sensor dual HG de gran precisión. Este sistema permite utilizar tanto el sensor láser como el óptico para mejorar la precisión de rastreo al calibrarse para las distintas superficies y permitir el ajuste de la distancia de rastreo de descarga. <br><strong>Tecnología inalámbrica con calidad para juegos</strong><br>La inigualable tecnología inalámbrica con calidad para juegos permite que el Razer Mamba funcione sin problemas tanto de forma inalámbrica como con cables, lo que te da total libertad de movimiento al jugar para alcanzar la gloria. <br>',6400,0,'mambaGrande.png','mambaPeq.png','mambaD1.jpg','mambaD2.jpg','mambaD3.jpg');
Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('Perixx MX-2000llB','39','Perixx MX-2000B, Ratón Láser Programable para Juego - 11 botones programables - Omron Micro Switches - Avago 5000DPI ADNS-9500 Laser Sensor - Ajuste de peso - Ultrapolling 1000 Hz - Negro<br>',5000,0,'perixxGrande.png','perixxPeq.png','perixxD1.jpg','perixxD2.jpg','perixxD3.jpg');
Insert into ratones (nombre,precio,descripcion,resolucion,wireless,imagen_grande,image_peque,image_d1,image_d2,image_d3) values ('Anker 8000 DPI','35','<strong>Diseñado para jugadores</strong><br>Hasta 8000 DPI, 12000 FPS, 1000 Hz de frecuencia de barrido, aceleración 30G, velocidad del cursor de 100-150pulg/s y un sensor Avago ADNS-9800. Los microinterruptores omron proveen clics nítidos y firmes. Tome control de su mundo virtual.<br><strong>Personalizable</strong><br> 9 botones programables, 2 perfiles almacenados de fábrica, un juego de pesos de ajuste de 8-piezas (2.5g/0.1oz cada una), y más de 16 millones de opciones de colores de LED. El LED puede deshabilitarse, si así lo desea.<br>',6400,0,'ankerGrande.png','ankerPeq.png','ankerD1.jpg','ankerD2.jpg','ankerD3.jpg');



