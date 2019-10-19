/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.26 : Database - cpuaai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cpuaai` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cpuaai`;

/*Table structure for table `nominee` */

DROP TABLE IF EXISTS `nominee`;

CREATE TABLE `nominee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `yeargraduated` text,
  `position` text,
  `status` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `nominee` */

insert  into `nominee`(`id`,`firstname`,`middlename`,`lastname`,`yeargraduated`,`position`,`status`) values (1,'Merry','Valdez','Jabagat','2020','Vice President',NULL),(2,'Admin','autofocus','Admin','autofocus','President',NULL),(3,'joy','Santiago','Alegrado','2019-2020','President',NULL),(4,'Merry','Valdez','Jabagat','2020','Vice President',NULL),(5,'Edel','Bonghanoy','BrasileÃ±o','2020','President',NULL),(6,'Merry','Valdez','Jabagat','2020','President','Approve'),(7,'Edel','Bonghanoy','BrasileÃ±o','2020','President','Approve'),(10,'Merry','Valdez','Jabagat','2020','Vice President','Approve'),(11,'Merry','Valdez','Jabagat','2020','Corporate Secretary','Approve');

/*Table structure for table `position` */

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `position` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `address` text,
  `yeargraduated` text,
  `sex` text,
  `email` text,
  `contact` text,
  `social` text,
  `username` text,
  `password` text,
  `role` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`firstname`,`middlename`,`lastname`,`address`,`yeargraduated`,`sex`,`email`,`contact`,`social`,`username`,`password`,`role`) values (1,'Admin Firstname',NULL,'Admin Lastname',NULL,NULL,NULL,NULL,NULL,NULL,'Admin1','1234','Admin'),(20,'joy','Santiago','Alegrado','Pavia','2019-2020','Female','@gmail','09090909009','facebook','user','123','User'),(21,'Edel','Bonghanoy','BrasileÃ±o','Alta Tierra Village, Jaro, Iloilo City','2020','Female','edelbrasileno@gmail.com','09152705126','@edlrain','edelbrasileno','1234','User'),(22,'Jace','Alomea','Gonzales','Numancia, Aklan','2020','Male','jaze14@gmail.com','091276244235','@jace','jace14','1234','User'),(23,'Merry','Valdez','Jabagat','Guadalupe, Cebu City','2020','Female','merryrose@gmail.com','0932478238549','@mrryv','merryrose','1234','User');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
