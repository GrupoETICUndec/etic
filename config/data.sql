/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.7.20-0ubuntu0.16.04.1 : Database - etic
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`etic` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `etic`;

/*Table structure for table `Docente` */

DROP TABLE IF EXISTS `Docente`;

CREATE TABLE `Docente` (
  `idDocente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `descripcion` blob,
  PRIMARY KEY (`idDocente`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

/*Data for the table `Docente` */

insert  into `Docente`(`idDocente`,`nombre`,`apellido`,`categoria`,`telefono`,`email`,`descripcion`) values (2,'Eliana ','Albrieu',4,NULL,'elianaalbrieu@gmail.com',NULL),(3,'Jonatan ','Alvarez',5,NULL,'jonatanemanuel.alvarez@gmail.com',NULL),(4,'Fernando Alejandro ','Anzalaz',5,NULL,'faanzalaz@yahoo.com',NULL),(5,'Germinal ','Arana',3,NULL,'garana@hotmail.com',NULL),(6,'Claudio Patricio ','Barrionuevo',4,NULL,'claudiopbarrionuevo@gmail.com',NULL),(7,'Ruy Enio ','Barros Olivera',3,NULL,'ruy1958@yahoo.com.ar',NULL),(8,'Florencia ','Bustos',NULL,NULL,'mariaflorenciabustos@gmail.com',NULL),(9,'Pablo Fernando ','Cargnelutti',NULL,NULL,'pablo.fernando.cargnelutti@gmail.com',NULL),(10,'Fernanda Beatriz','Carmona',1,NULL,'fbcarmona69@gmail.com',NULL),(11,'Verónica ','Carneiro',NULL,NULL,'veronica_pini@hotmail.com',NULL),(12,'Miguel Alejandro ','Castañeda',4,NULL,'m78castaneda@gmail.com',NULL),(13,'Silvana Elizabeth ','Castro',4,NULL,'ecastro@undec.edu.ar',NULL),(14,'Diego ','Cena',NULL,NULL,'diegocena2@gmail.com',NULL),(15,'Pablo ','Chade',1,NULL,'pablochade@hotmail.com',NULL),(16,'Alejandro ','Cruz',5,NULL,'alejandrocruz1987@gmail.com',NULL),(17,'Alejandro Gastón ','Dantiacq Piccolella',3,NULL,'alejandro.dantiacq@gmail.com',NULL),(18,'Juan José ','Dávila',5,NULL,'juan-jose-davila@hotmail.com',NULL),(19,'Hugo ','Fajardo',3,NULL,'hugofajardo1@gmail.com ',NULL),(20,'Fernando Emmanuel','Frati',3,NULL,'emmanuelfrati@gmail.com',NULL),(21,'Francisco ','Frati',5,NULL,'pacofrati@hotmail.com',NULL),(22,'Marco ','Furlani',1,NULL,'mfurlani@undec.edu.ar',NULL),(23,'Marisa ','Gagliardi',4,NULL,'marisagagliardi76@gmail.com',NULL),(24,'Fabian ','Gómez',5,NULL,'albertogomez@hotmail.com',NULL),(25,'Sebastián ','Guidet Canovas',5,NULL,'seba_guidet@hotmail.com',NULL),(26,'Claudia ','Isaia',3,NULL,'cpeisaia@gmail.com ',NULL),(27,'María Elena ','Lábaque',3,NULL,'malena_labaque@yahoo.com.ar',NULL),(28,'Ricardo ','Lucero',1,NULL,'ricardo_a_lucero@yahoo.com.ar',NULL),(29,'Carolina ','Manrique',4,NULL,'acmanrique11@gmail.com',NULL),(30,'Horacio ','Martinez del Pezzo',1,NULL,'martinezdelpezzo@gmail.com',NULL),(31,'Enrique N. ','Martinez',1,NULL,'enriquenmartinez@gmail.com',NULL),(32,'Gabriel ','Martinez',1,NULL,'chilecito@gmail.com',NULL),(33,'Hugo ','Maza',NULL,NULL,'hcmaza@yahoo.com.ar',NULL),(34,'Nora ','Mazolla',2,NULL,'noramazzola@hotmail.com',NULL),(35,'Julio Oscar ','Mercado',4,NULL,'julioosmercado@hotmail.com',NULL),(36,'Roberto ','Millon',5,NULL,'robertomillontello@gmail.com',NULL),(37,'Raúl ','Moralejo',3,NULL,'romoralejo@gmail.com',NULL),(38,'Enrique ','Neder',3,NULL,'enrique.neder@eco.uncor.edu',NULL),(39,'Juan Marcelo ','Ochova',4,NULL,'jmochova@hotmail.com',NULL),(40,'Pablo ','Olmedo',NULL,NULL,'polmedo@undec.edu.ar',NULL),(41,'Gabriel ','Quiroga',3,NULL,'quirogagabriel@gmail.com',NULL),(42,'Carlos Ariel ','Quiroga Marín',4,NULL,'caqmchilecito@hotmail.com',NULL),(43,'Rosana ','Quiroga',1,NULL,'roquiroga4@hotmail.com',NULL),(44,'Raul ','Ramos',4,NULL,'rramos@undec.edu.ar',NULL),(45,'Alberto ','Riba',1,NULL,'albertoriba@gmail.com',NULL),(46,'Eugenia ','Rivero',3,NULL,'eugeriverop@yahoo.com.ar',NULL),(47,'Emmanuel ','Robador',4,NULL,'robador@gmail.com',NULL),(48,'Hector Daniel ','Robins',3,NULL,'daniel.robins@kunan.com.ar',NULL),(49,'Lucía ','Rodriguez',4,NULL,'luciarwaidatt@gmail.com',NULL),(50,'Jorge Mario ','Rojo',3,NULL,'jorgerojo@arnet.com.ar',NULL),(51,'Horacio ','Roldan',3,NULL,'horacioroldan08@gmail.com',NULL),(52,'Clelia ','Romero',3,NULL,'cromero@undec.edu.ar',NULL),(53,'Mara ','Rovero',5,NULL,'mararovero@gmail.com',NULL),(54,'Alberto Javier ','Ruitti',4,NULL,'ruittijavier@gmail.com',NULL),(55,'Natalia ','Ruitti',5,NULL,'nruitti@undec.edu.ar',NULL),(56,'Valeria ','Sanchez',5,NULL,'valeria_vas22@hotmail.com',NULL),(57,'Elvio ','Sigampa Paez',3,NULL,'esigampapaez@yahoo.com.ar',NULL),(58,'Jorge ','Tejada',4,NULL,'jorgedat@gmail.com',NULL),(59,'José Daniel ','Texier Ramirez',3,NULL,'dantexier@gmail.com',NULL),(60,'Edgar ','Torrielli',NULL,NULL,'e.torrielli@gmail.com',NULL),(61,'Daniel E. ','Turne',NULL,NULL,'daniel.turne@gmail.com',NULL),(62,'Marcela ','Valleto',4,NULL,'marcevalletto@gmail.com',NULL),(63,'Hector M. ','Varas',3,NULL,'micovaras@yahoo.com.ar',NULL),(64,'Verena ','Vicencio',4,NULL,'verevere@gmail.com',NULL),(66,'Hugo Javier','Curti',3,NULL,NULL,NULL);

/*Table structure for table `User` */

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `idUser` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `passwd` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `User` */

insert  into `User`(`idUser`,`name`,`user`,`passwd`) values (1,'Admin','admin','admin');

/*Table structure for table `carrera` */

DROP TABLE IF EXISTS `carrera`;

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `plan` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `carrera` */

insert  into `carrera`(`idCarrera`,`plan`,`nombre`) values (1,'072/08','Ingenieria en Sistemas');

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `categoria` */

insert  into `categoria`(`idCategoria`,`descripcion`) values (1,'Profesor Titular'),(2,'Profesor Asociado'),(3,'Profesor Adjunto'),(4,'Jefe de Trabajos Practicos'),(5,'Ayudante de Primera');

/*Table structure for table `correlatividad` */

DROP TABLE IF EXISTS `correlatividad`;

CREATE TABLE `correlatividad` (
  `idPlan` int(11) DEFAULT NULL,
  `esCorrelativaDe` int(11) DEFAULT NULL,
  `tipoCorrelatividad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `correlatividad` */

insert  into `correlatividad`(`idPlan`,`esCorrelativaDe`,`tipoCorrelatividad`) values (5,7,1),(4,8,1),(4,9,1),(1,11,1),(2,12,1),(6,13,1),(1,14,1),(7,15,1),(7,16,1),(14,17,1),(9,18,1),(15,19,1),(15,20,1),(19,21,1),(12,22,1),(12,23,1),(13,24,1),(11,25,1),(17,26,1),(20,27,1),(25,28,1),(25,29,1),(18,30,1),(23,31,1),(22,32,1),(22,33,1),(21,34,1),(30,35,1),(28,36,1),(30,38,1),(22,39,1),(34,40,1),(36,41,1),(35,42,1),(37,44,1),(41,45,1),(38,46,1),(31,47,1),(40,48,1),(40,49,1),(48,50,1),(47,51,1),(44,52,1),(47,53,1),(8,14,1),(16,19,1),(13,23,1),(26,29,1),(23,32,1),(34,38,1),(42,46,1),(41,47,1),(44,49,1),(1,17,2),(4,18,2),(5,20,2),(17,21,2),(2,22,2),(2,23,2),(6,24,2),(1,25,2),(14,26,2),(7,27,2),(1,28,2),(7,29,2),(1,30,2),(12,31,2),(12,32,2),(12,33,2),(19,34,2),(18,35,2),(18,36,2),(24,37,2),(18,38,2),(12,39,2),(19,40,2),(24,44,2),(22,45,2),(21,46,2),(23,47,2),(21,48,2),(21,49,2),(34,50,2),(22,51,2),(26,52,2),(22,53,2),(9,25,2),(9,28,2),(10,29,2),(6,30,2),(13,31,2),(13,32,2),(20,34,2),(20,40,2),(24,51,2),(24,53,2),(5,7,3),(1,8,3),(4,9,3),(1,11,3),(2,12,3),(6,13,3),(1,14,3),(7,15,3),(7,16,3),(11,17,3),(9,18,3),(15,19,3),(15,20,3),(19,21,3),(12,22,3),(12,23,3),(13,24,3),(11,25,3),(17,26,3),(20,27,3),(25,28,3),(25,29,3),(18,30,3),(23,31,3),(22,32,3),(22,33,3),(21,34,3),(30,35,3),(28,36,3),(30,38,3),(22,39,3),(34,40,3),(36,41,3),(35,42,3),(37,44,3),(41,45,3),(38,46,3),(31,47,3),(40,48,3),(40,49,3),(48,50,3),(47,51,3),(44,52,3),(47,53,3),(4,8,3),(8,14,3),(14,17,3),(16,19,3),(13,23,3),(26,29,3),(23,32,3),(34,38,3),(42,46,3),(41,47,3),(44,49,3);

/*Table structure for table `equipo` */

DROP TABLE IF EXISTS `equipo`;

CREATE TABLE `equipo` (
  `idMateria` int(11) DEFAULT NULL,
  `idDocente` int(11) DEFAULT NULL,
  `aCargo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `equipo` */

insert  into `equipo`(`idMateria`,`idDocente`,`aCargo`) values (1,50,1),(2,26,1),(3,63,1),(4,50,1),(5,26,1),(6,34,1),(7,57,1),(8,15,1),(9,50,1),(10,22,1),(11,51,1),(12,10,1),(13,10,1),(14,15,1),(15,30,1),(16,31,1),(17,15,1),(18,5,1),(19,31,1),(20,45,1),(21,41,1),(22,45,1),(23,45,1),(24,28,1),(25,51,1),(26,61,1),(27,20,1),(28,27,1),(29,57,1),(30,38,1),(31,48,1),(32,19,1),(33,59,1),(34,40,1),(35,52,1),(36,27,1),(37,43,1),(38,28,1),(39,19,1),(40,17,1),(41,31,1),(42,34,1),(43,3,1),(44,44,1),(45,31,1),(46,32,1),(47,19,1),(48,17,1),(49,40,1),(50,66,1),(51,3,1),(52,22,1),(53,3,1),(1,46,0),(2,53,0),(3,62,0),(4,24,0),(5,13,0),(6,2,0),(7,25,0),(8,7,0),(9,24,0),(10,35,0),(11,4,0),(12,20,0),(13,23,0),(14,57,0),(15,36,0),(16,42,0),(17,57,0),(18,49,0),(19,47,0),(20,58,0),(22,58,0),(23,47,0),(24,64,0),(25,39,0),(26,57,0),(27,16,0),(29,25,0),(30,29,0),(31,3,0),(32,54,0),(37,12,0),(38,64,0),(39,6,0),(40,18,0),(41,42,0),(42,2,0),(43,53,0),(44,21,0),(46,55,0),(48,18,0),(51,32,0),(53,53,0),(2,16,0),(8,24,0),(11,39,0),(14,24,0),(17,24,0),(24,56,0),(26,25,0),(38,55,0),(43,56,0),(51,53,0),(43,56,0);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `idMateria` int(11) NOT NULL AUTO_INCREMENT,
  `asignatura` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMateria`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`idMateria`,`asignatura`) values (1,'Análisis Matemático I'),(2,'Algoritmos y Estructura de Datos'),(3,'Sistema de Representación'),(4,'Algebra y Geometría Analítica'),(5,'Matemática Discreta'),(6,'Administración y Organización de Empresas'),(7,'Electrónica Digital'),(8,'Física I'),(9,'Algebra Lineal'),(10,'Química General'),(11,'Análisis Matemático II'),(12,'Programación I'),(13,'Sistemas I'),(14,'Física II'),(15,'Arquitectura de Computadoras I'),(16,'Sistemas Operativos I'),(17,'Física III'),(18,'Probabilidad y Estadística'),(19,'Sistemas Operativos II'),(20,'Arquitectura de Computadoras II'),(21,'Tecnologías de Comunicaciones'),(22,'Programación II'),(23,'Bases de Datos I'),(24,'Sistemas II'),(25,'Análisis Matemático III'),(26,'Electrotecnia'),(27,'Arquitecturas Paralelas'),(28,'Cálculo Numérico y Avanzado'),(29,'Teoría de Control'),(30,'Economía'),(31,'Bases de Datos II'),(32,'Programación III'),(33,'Teoría de la Computación'),(34,'Redes de Datos I'),(35,'Contabilidad y Costos'),(36,'Investigación Operativa'),(37,'Ética Profesional'),(38,'Formulación y Evaluación de Proyectos'),(39,'Paradigmas de Programación'),(40,'Redes de Datos II'),(41,'Modelos y Simulación'),(42,'Planeamiento y Control de Gestión'),(43,'Trabajo Final'),(44,'Legislación'),(45,'Inteligencia Artificial'),(46,'Administración de Proyectos Informáticos'),(47,'Ingeniería de Software'),(48,'Comunicaciones Inalámbricas'),(49,'Pericias Informáticas y de Comunicaciones'),(50,'Criptografía y Seguridad Informática'),(51,'Auditoria de Sistemas'),(52,'Higiene y Seguridad en el Trabajo y el Medio Ambie'),(53,'Gestión de la Calidad'),(54,'Taller de ingles informatico I');

/*Table structure for table `plan` */

DROP TABLE IF EXISTS `plan`;

CREATE TABLE `plan` (
  `idPlan` int(11) NOT NULL AUTO_INCREMENT,
  `idCarrera` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `codigo` int(11) NOT NULL,
  `Regimen` varchar(20) DEFAULT NULL,
  `horasPrimerCuatrimestre` int(11) DEFAULT NULL,
  `horasSegundoCuatrimestre` int(11) DEFAULT NULL,
  `horasAnuales` int(11) DEFAULT NULL,
  `programa` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idPlan`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `plan` */

insert  into `plan`(`idPlan`,`idCarrera`,`idMateria`,`anio`,`codigo`,`Regimen`,`horasPrimerCuatrimestre`,`horasSegundoCuatrimestre`,`horasAnuales`,`programa`) values (1,1,1,1,101,'Anual',5,5,150,'data/IS/101-IS-AnálisisMatemáticoI.pdf'),(2,1,2,1,102,'Anual',5,5,150,'data/IS/102-IS-AlgoritmosyEstructuradeDatos.pdf'),(3,1,3,1,111,'1C',5,0,75,'data/IS/111-IS-SistemadeRepresentación.pdf'),(4,1,4,1,112,'1C',4,0,60,'data/IS/112-IS-AlgebrayGeometríaAnalítica.pdf'),(5,1,5,1,113,'1C',4,0,60,'data/IS/113-IS-MatemáticaDiscreta.pdf'),(6,1,6,1,114,'1C',3,0,45,'data/IS/114-IS-AdministraciónyOrganizacióndeEmpresas.pdf'),(7,1,7,1,121,'2C',0,4,60,'data/IS/121-IS-ElectrónicaDigital.pdf'),(8,1,8,1,122,'2C',0,5,75,'data/IS/122-IS-FísicaI.pdf'),(9,1,9,1,123,'2C',0,4,60,'data/IS/123-IS-AlgebraLineal.pdf'),(10,1,10,1,124,'2C',0,4,60,'data/IS/124-IS-QuímicaGeneral.pdf'),(11,1,11,2,201,'Anual',4,4,120,'data/IS/201-IS-AnálisisMatemáticoII.pdf'),(12,1,12,2,202,'Anual',4,4,120,'data/IS/202-IS-ProgramaciónI.pdf'),(13,1,13,2,203,'Anual',4,4,120,'data/IS/203-IS-SistemasI.pdf'),(14,1,14,2,211,'1C',5,0,75,'data/IS/211-IS-FísicaII.pdf'),(15,1,15,2,212,'1C',4,0,60,'data/IS/212-IS-ArquitecturadeComputadorasI.pdf'),(16,1,16,2,213,'1C',4,0,60,'data/IS/213-IS-SistemasOperativosI.pdf'),(17,1,17,2,221,'2C',0,5,75,'data/IS/221-IS-FísicaIII.pdf'),(18,1,18,2,222,'2C',0,4,60,'data/IS/222-IS-ProbabilidadyEstadística.pdf'),(19,1,19,2,223,'2C',0,4,60,'data/IS/223-IS-SistemasOperativosII.pdf'),(20,1,20,2,224,'2C',0,4,60,'data/IS/224-IS-ArquitecturadeComputadorasII.pdf'),(21,1,21,3,301,'Anual',3,3,90,'data/IS/301-IS-TecnologíasdeComunicaciones.pdf'),(22,1,22,3,302,'Anual',4,4,120,'data/IS/302-IS-ProgramaciónII.pdf'),(23,1,23,3,303,'Anual',4,4,120,'data/IS/303-IS-BasesdeDatosI.pdf'),(24,1,24,3,304,'Anual',4,4,120,'data/IS/304-IS-SistemasII.pdf'),(25,1,25,3,311,'1C',4,0,60,'data/IS/311-IS-AnálisisMatemáticoIII.pdf'),(26,1,26,3,312,'1C',3,0,45,'data/IS/312-IS-Electrotecnia.pdf'),(27,1,27,3,313,'1C',4,0,60,'data/IS/313-IS-ArquitecturasParalelas.pdf'),(28,1,28,3,321,'2C',0,4,60,'data/IS/321-IS-CálculoNuméricoyAvanzado.pdf'),(29,1,29,3,322,'2C',0,4,60,'data/IS/322-IS-TeoríadeControl.pdf'),(30,1,30,3,323,'2C',0,3,45,'data/IS/323-IS-Economía.pdf'),(31,1,31,4,401,'Anual',4,4,120,'data/IS/401-IS-BasesdeDatosII.pdf'),(32,1,32,4,402,'Anual',4,4,120,'data/IS/402-IS-ProgramaciónIII.pdf'),(33,1,33,4,411,'1C',4,0,60,'data/IS/411-IS-TeoríadelaComputación.pdf'),(34,1,34,4,412,'1C',4,0,60,'data/IS/412-IS-RedesdeDatosI.pdf'),(35,1,35,4,413,'1C',3,0,45,'data/IS/413-IS-ContabilidadyCostos.pdf'),(36,1,36,4,414,'1C',4,0,60,'data/IS/414-IS-InvestigaciónOperativa.pdf'),(37,1,37,4,415,'1C',3,0,45,'data/IS/415-IS-ÉticaProfesional.pdf'),(38,1,38,4,421,'2C',0,3,45,'data/IS/421-IS-FormulaciónyEvaluacióndeProyectos.pdf'),(39,1,39,4,422,'2C',0,4,60,'data/IS/422-IS-ParadigmasdeProgramación.pdf'),(40,1,40,4,423,'2C',0,4,60,'data/IS/423-IS-RedesdeDatosII.pdf'),(41,1,41,4,424,'2C',0,4,60,'data/IS/424-IS-ModelosySimulación.pdf'),(42,1,42,4,425,'2C',0,3,45,'data/IS/425-IS-PlaneamientoyControldeGestión.pdf'),(43,1,43,5,501,'Anual',4,4,120,'data/IS/501-IS-TrabajoFinal.pdf'),(44,1,44,5,511,'1C',3,0,45,'data/IS/511-IS-Legislación.pdf'),(45,1,45,5,512,'1C',4,0,60,'data/IS/512-IS-InteligenciaArtificial.pdf'),(46,1,46,5,513,'1C',4,0,60,'data/IS/513-IS-AdministracióndeProyectosInformáticos.pdf'),(47,1,47,5,514,'1C',4,0,60,'data/IS/514-IS-IngenieríadeSoftware.pdf'),(48,1,48,5,515,'1C',4,0,60,'data/IS/515-IS-ComunicacionesInalámbricas.pdf'),(49,1,49,5,521,'2C',0,4,60,'data/IS/521-IS-PericiasInformáticasydeComunicaciones.pdf'),(50,1,50,5,522,'2C',0,4,60,'data/IS/522-IS-CriptografíaySeguridadInformática.pdf'),(51,1,51,5,523,'2C',0,4,60,'data/IS/523-IS-AuditoriadeSistemas.pdf'),(52,1,52,5,524,'2C',0,3,45,'data/IS/524-IS-HigieneySeguridadenelTrabajoyelMedioAmbie.pdf'),(53,1,53,5,525,'2C',0,4,60,'data/IS/525-IS-GestióndelaCalidad.pdf'),(54,1,54,0,0,'',0,0,0,'data/IS/0-IS-TallerdeinglesinformaticoI.pdf');

/*Table structure for table `tipoCorrelatividad` */

DROP TABLE IF EXISTS `tipoCorrelatividad`;

CREATE TABLE `tipoCorrelatividad` (
  `idCorrelatividad` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCorrelatividad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tipoCorrelatividad` */

insert  into `tipoCorrelatividad`(`idCorrelatividad`,`descripcion`) values (1,'Regularizada para cursar'),(2,'Aprobada para cursar'),(3,'Aprobada para rendir');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
