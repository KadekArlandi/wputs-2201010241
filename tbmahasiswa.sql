/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.25-MariaDB : Database - tbmahasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tbmahasiswa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tbmahasiswa`;

/*Table structure for table `tbadmin` */

DROP TABLE IF EXISTS `tbadmin`;

CREATE TABLE `tbadmin` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbadmin` */

insert  into `tbadmin`(`id`,`nama`,`email`,`username`,`passkey`,`iduser`) values 
(1,'Kadek Arlandi Mahesa Gautama Putra','apaaja@gmail.com','Kadek Aldi','81dc9bdb52d04dc20036dbd8313ed055','28ae6be9fab77393fa6c6320927e44c6'),
(2,'Aldi','percobaan@gmail.com','Kadek Aldi','4a7d1ed414474e4033ac29ccb8653d9b','745e83237cf6b17ebfb89d4619e5f35a'),
(3,'Siapa aja','apaajadeh@gmail.com','Siapa hayo','b59c67bf196a4758191e42f76670ceba','5bf574a0496c929868f7db28280d7ff6'),
(4,'Kadek Aldi','utspwu@gmail.com','Kadek Aldi','81dc9bdb52d04dc20036dbd8313ed055','0d44a109dd7962ec654ba20d05627126');

/*Table structure for table `tbmahasiswa` */

DROP TABLE IF EXISTS `tbmahasiswa`;

CREATE TABLE `tbmahasiswa` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbmahasiswa` */

insert  into `tbmahasiswa`(`id`,`nama`,`nim`,`prodi`,`jenis_kelamin`,`no_telp`,`passkey`,`iduser`) values 
(6,'Kadek Arlandi Mahesa Gautama Putra','2201010241','MDI','laki-laki','0812345678','b59c67bf196a4758191e42f76670ceba','28ae6be9fab77393fa6c6320927e44c6'),
(7,'Kadek Aldi','2201010241','PAR','Laki-Laki','08122222222','934b535800b1cba8f96a5d72f72f1611','0d44a109dd7962ec654ba20d05627126');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
