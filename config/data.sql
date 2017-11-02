/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.26-MariaDB-1 : Database - etic
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`etic` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `etic`;

/*Table structure for table `Cliente` */

DROP TABLE IF EXISTS `Docente`;

CREATE TABLE `Docente` (
  `idDocente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idDocente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `Docente` */

insert  into `Docente`(`idDocente`,`nombre`,`apellido`,`telefono`,`email`) values (1,'Fernando Emmanuel','Frati','','fefrati@undec.edu.ar');

/*Table structure for table `Usuario` */

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `idUser` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `passwd` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `Empleado` */

insert  into `User`(`idUser`,`name`,`user`,`passwd`) values (1,'Admin','admin','admin');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
