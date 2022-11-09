
CREATE TABLE AreaConocimiento(
	idAreaConocimiento int AUTO_INCREMENT NOT NULL,
	Descripcion varchar(50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	idAreaConocimiento ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
/****** Object:  Table BancoRespuestas    Script Date: 8/11/2022 9:44:09 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE BancoRespuestas(
	id int AUTO_INCREMENT NOT NULL,
	idPreguntas int NOT NULL,
	respuesta varchar(50) NOT NULL,
	activo char(5) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	id ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
/****** Object:  Table Cuestionarios    Script Date: 8/11/2022 9:44:09 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE Cuestionarios(
	id int AUTO_INCREMENT NOT NULL,
	nombre varchar(50) NOT NULL,
	activo char(5) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	id ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
/****** Object:  Table Personas    Script Date: 8/11/2022 9:44:09 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE Personas(
	id int AUTO_INCREMENT NOT NULL,
	nombreEps varchar(50) NOT NULL,
	nombre1 varchar(50) NULL,
	nombre2 varchar(50) NULL,
	apellido1 varchar(50) NOT NULL,
	apellido2 varchar(50) NULL,
	correo varchar(50) NOT NULL,
	cargo varchar(50) NOT NULL,
	token varchar(500) NOT NULL,
	activo int NOT NULL,
PRIMARY KEY CLUSTERED 
(
	id ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
/****** Object:  Table Preguntas    Script Date: 8/11/2022 9:44:09 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE Preguntas(
	id int AUTO_INCREMENT NOT NULL,
	idCuestionarios int NOT NULL,
	pregunta varchar(500) NOT NULL,
	prioPreg int NOT NULL,
	consultora varchar(50) NOT NULL,
	AreaCon varchar(50) NOT NULL,
	activo char(5) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	id ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
/****** Object:  Table PreguntasAbiertas    Script Date: 8/11/2022 9:44:09 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE PreguntasAbiertas(
	idPregunta_Abierta int AUTO_INCREMENT NOT NULL,
	idPregunta int NULL,
	CampoPregunta varchar(150) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	idPregunta_Abierta ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
/****** Object:  Table Respuestas    Script Date: 8/11/2022 9:44:09 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE Respuestas(
	id int AUTO_INCREMENT NOT NULL,
	idPersonas int NOT NULL,
	idPreguntas int NOT NULL,
	idBancoResp int NOT NULL,
	fecha datetime NOT NULL,
PRIMARY KEY CLUSTERED 
(
	id ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
/****** Object:  Table Token    Script Date: 8/11/2022 9:44:09 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE Token(
	idToken int  AUTO_INCREMENT NOT NULL,
	Nombre varchar(60) NULL,
	Contraseña varchar(100) NULL,
	email varchar(100) NULL,
	Entidad varchar(50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	idToken ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON PRIMARY
) ON PRIMARY
GO
SET IDENTITY_INSERT INTO AreaConocimiento ON 
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (1, 'Almacenamiento')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (2, 'Almacenamiento y operaciones')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (3, 'Arquitecrura empresarial')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (4, 'Arquitectura de datos')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (5, 'Calidad')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (6, 'Ciberseguridad')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (7, 'Estrategia de datos')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (8, 'Gestión de datos maestros')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (9, 'Gestión de datos maestros')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (10, 'Gobierno')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (11, 'Mejora de Productividad')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (12, 'Seguridad de información y de los datos')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (13, 'Gestión documental y de contenidos')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (14, 'Gestión de metadatos')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (15, 'Integracion e interoperabilidad')
GO
INSERT INTO AreaConocimiento (idAreaConocimiento, Descripcion) VALUES (16, 'Modelos de transformacion digital')
GO
SET IDENTITY_INSERT INTO AreaConocimiento OFF
GO
SET IDENTITY_INSERT INTO BancoRespuestas ON 
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (11, 7, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (12, 7, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (13, 7, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (14, 7, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (15, 7, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (16, 8, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (17, 8, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (18, 8, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (19, 8, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (20, 8, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (21, 9, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (22, 9, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (23, 9, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (24, 9, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (25, 9, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (26, 10, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (27, 10, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (28, 10, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (29, 10, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (30, 10, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (31, 11, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (32, 11, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (33, 11, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (34, 11, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (35, 11, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (36, 12, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (37, 12, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (38, 12, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (39, 12, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (40, 12, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (41, 13, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (42, 13, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (43, 13, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (44, 13, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (45, 13, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (46, 14, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (47, 14, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (48, 14, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (49, 14, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (50, 14, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (51, 15, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (52, 15, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (53, 15, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (54, 15, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (55, 15, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (56, 16, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (57, 16, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (58, 16, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (59, 16, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (60, 16, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (61, 17, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (62, 17, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (63, 17, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (64, 17, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (65, 17, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (66, 18, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (67, 18, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (68, 18, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (69, 18, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (70, 18, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (71, 19, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (72, 19, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (73, 19, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (74, 19, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (75, 19, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (76, 20, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (77, 20, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (78, 20, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (79, 20, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (80, 20, 'Totalmente De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (81, 21, 'Totalmente en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (82, 21, 'En desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (83, 21, 'Ni en acuerdo ni en desacuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (84, 21, 'De acuerdo', '1    ')
GO
INSERT INTO BancoRespuestas (id, idPreguntas, respuesta, activo) VALUES (85, 21, 'Totalmente De acuerdo', '1    ')
GO
SET IDENTITY_INSERT INTO BancoRespuestas OFF
GO
SET IDENTITY_INSERT INTO Cuestionarios ON 
GO
INSERT INTO Cuestionarios (id, nombre, activo) VALUES (1, 'eps', '1    ')
GO
SET IDENTITY_INSERT INTO Cuestionarios OFF
GO
SET IDENTITY_INSERT INTO Personas ON 
GO
INSERT INTO Personas (id, nombreEps, nombre1, nombre2, apellido1, apellido2, correo, cargo, token, activo) VALUES (3, 'Sanitas', 'Lorenzo', 'Jesus', 'Rojas', '', 'prueba10@email.com', 'Líderes negocio', '21312321sa', 1)
GO
INSERT INTO Personas (id, nombreEps, nombre1, nombre2, apellido1, apellido2, correo, cargo, token, activo) VALUES (5, 'Sanitas', 'Lorenzo', 'Jesus', 'Rojas', '', 'prueba@email.com', 'Líderes negocio', '0956b1902ece3f671a3274d3d8eb213cc2a575c9334d35e2e5ef40077f05b0c9', 1)
GO
INSERT INTO Personas (id, nombreEps, nombre1, nombre2, apellido1, apellido2, correo, cargo, token, activo) VALUES (6, 'Sanitas', 'Lorenzo', 'Jesus', 'Rojas', '', 'prueba1@email.com', 'Líderes negocio', '0956b1902ece3f671a3274d3d8eb213cc2a575c9334d35e2e5ef40077f05b0c9', 1)
GO
SET IDENTITY_INSERT INTO Personas OFF
GO
SET IDENTITY_INSERT INTO Preguntas ON 
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (7, 1, '¿La EPS cuenta con un repositorio central de datos organizado y definido que se puede analizar para tomar decisiones mejor informadas?', 1, 'CAC', '1', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (8, 1, '¿La EPS Almacena datos estructurados y datos no estructurados que se puede analizar para tomar decisiones mejor informadas?', 1, 'CAC', '1', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (9, 1, '¿La EPS cuenta con una politica establecida para el almacenamiento de datos?', 1, 'CAC', '1', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (10, 1, '¿La EPS Cuenta con estos tipos de almacenamiento?  (Seleccione uno o varios)', 1, 'CAC', '1', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (11, 1, '¿La entidad tiene definido los esquemas para salvaguardar la información y los datos de manera segura y conservadon la integridad de los datos? ', 2, 'Tinysoft', '2', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (12, 1, '¿La entidad tiene definido practicas de poiticas, proceso, procedimientos, fichas de registro y cambios para respladar los datos.? ', 2, 'Tinysoft', '2', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (13, 1, '¿EPS perteneciente al sector publico: ha realizado y evaluado el nivel de madurez según los lineamientos de MinTIC? ', 1, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (14, 1, '¿La entidad a identificado, planeado y priorizado al menos un ejercicio de AE con el fin de articular el negocio con la tecnología? ', 2, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (15, 1, '¿La entidad a traves de su departamento de Tecnologías de la información ha definido una matriz de interesados que presente, clasifique y priorice involucrados e impactados? ', 2, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (16, 1, '¿La entidad ha definido y tiene implentado un modelo de entendimiento, identificacion de capacidades y operavilidad? ', 2, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (17, 1, '¿La entidad tiene un modelo de arquitectura de la informacion donde ha definido un catalogo de componentes de información, diseño de escenarios arquitetconico orientado a información (Vistas), identificación de datos maestros, mapas de ifnormación (Intercambio de datos), definición de lenguaje para el intercambio de información, canales de acceso, identificacipón de fuentes y apertura de datos publicos.? ', 2, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (18, 1, '¿La EPS ha definido y tiene implementado un modelo de sistemas de inofrmación y aplicaciones a traves de una arquitectura de referencia y solución (Vistas) y un catalogo de aplicaciones de uso? ', 1, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (19, 1, '¿La EPS tiene definido, diseñado e implemntado un modelo de arquitectura de infraestructura tecnologica que incluye un catalogo de elementos tecnologicos (Servidores, bases de datos, software base, etc), una plataforma de interoerabilidad, acceso a servicios en nube, definición de planes de continuidad y disponibilidad de la infraestructura tecnologica? ', 1, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (20, 1, '¿La EPS tiene definido un modelo de seguridad orientado a la auditoria y trazabilidad de componentes de la información, protección y privacidad de los componentes de información, seguridad,  privacidad y auditoria orientado a los sistemas de información,  analisis de riesgos identificados y un modelo definido de seguridad Informatica (SGSI o MSPI)? ', 1, 'Tinysoft', '3', '1    ')
GO
INSERT INTO Preguntas (id, idCuestionarios, pregunta, prioPreg, consultora, AreaCon, activo) VALUES (21, 1, '¿La entidad tiene definido un programa de sensibilización y concientización del uso de la arquitectura empresarial presentado a traves de hojas de ruta, plan de comunicaciones, proceso para mantener la AE, retorno de inversion de TI y un repositoiro de AE que se actualzia de manera continua? ', 2, 'Tinysoft', '3', '1    ')
GO
SET IDENTITY_INSERT INTO Preguntas OFF
GO
SET IDENTITY_INSERT INTO Respuestas ON 
GO
INSERT INTO Respuestas (id, idPersonas, idPreguntas, idBancoResp, fecha) VALUES (1, 1, 9, 11, CAST('1900-01-01T00:00:00.000' AS DateTime))
GO
INSERT INTO Respuestas (id, idPersonas, idPreguntas, idBancoResp, fecha) VALUES (2, 1, 9, 11, CAST('1900-01-01T00:00:00.000' AS DateTime))
GO
INSERT INTO Respuestas (id, idPersonas, idPreguntas, idBancoResp, fecha) VALUES (3, 1, 9, 11, CAST('2022-09-09T00:00:00.000' AS DateTime))
GO
SET IDENTITY_INSERT INTO Respuestas OFF
GO
ALTER TABLE BancoRespuestas  WITH CHECK ADD  CONSTRAINT fk_Preguntas FOREIGN KEY(idPreguntas)
REFERENCES Preguntas (id)
GO
ALTER TABLE BancoRespuestas CHECK CONSTRAINT fk_Preguntas
GO
ALTER TABLE Preguntas  WITH CHECK ADD  CONSTRAINT FK_Preguntas_Cuestionarios FOREIGN KEY(idCuestionarios)
REFERENCES Cuestionarios (id)
GO
ALTER TABLE Preguntas CHECK CONSTRAINT FK_Preguntas_Cuestionarios
GO
ALTER TABLE Respuestas  WITH CHECK ADD  CONSTRAINT fk_BancoRespuestas FOREIGN KEY(idBancoResp)
REFERENCES BancoRespuestas (id)
GO
ALTER TABLE Respuestas CHECK CONSTRAINT fk_BancoRespuestas
GO
ALTER TABLE Respuestas  WITH CHECK ADD  CONSTRAINT fk_Preguntas_Cuestionario FOREIGN KEY(idPreguntas)
REFERENCES Preguntas (id)
GO
ALTER TABLE Respuestas CHECK CONSTRAINT fk_Preguntas_Cuestionario
GO
