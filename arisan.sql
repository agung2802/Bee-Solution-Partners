/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.37-MariaDB : Database - db_arisan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_arisan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_arisan`;

/*Table structure for table `arisan` */

DROP TABLE IF EXISTS `arisan`;

CREATE TABLE `arisan` (
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status_bayar` enum('Belum Bayar','Sudah Bayar') NOT NULL DEFAULT 'Belum Bayar',
  `status_menang` enum('Belum Menang','Sudah Menang') NOT NULL DEFAULT 'Belum Menang',
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `arisan` */

insert  into `arisan`(`nama`,`alamat`,`status_bayar`,`status_menang`,`id`) values ('Agung','Bandung','Sudah Bayar','Belum Menang',2),('Rizki','KOPO','Sudah Bayar','Belum Menang',6);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
