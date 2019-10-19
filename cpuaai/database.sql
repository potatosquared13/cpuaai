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

/*Table structure for table `add_news` */

DROP TABLE IF EXISTS `add_news`;

CREATE TABLE `add_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` text,
  `news_date` date DEFAULT NULL,
  `article` text,
  `upload` text,
  `dash` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `add_news` */

insert  into `add_news`(`id`,`news_title`,`news_date`,`article`,`upload`,`dash`) values (46,'News Title 1','2019-10-10','Testing Article','admin2.jpg',NULL),(47,'New 2','2019-10-16','Article 2','1.jpg',NULL);

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `address_line` text,
  `city` text,
  `spr` text,
  `zip` text,
  `country` text,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `address` */

/*Table structure for table `college` */

DROP TABLE IF EXISTS `college`;

CREATE TABLE `college` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT,
  `college10` text,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `college` */

insert  into `college`(`college_id`,`college10`) values (1,'College of Arts and Sciences'),(2,'College of Education'),(3,'College of Engineering ');

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` text,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `country` */

insert  into `country`(`country_id`,`country`) values (1,'China'),(2,'Philippines');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` text,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`course_id`,`course_title`) values (1,'BSIT'),(2,'BSCS');

/*Table structure for table `csv` */

DROP TABLE IF EXISTS `csv`;

CREATE TABLE `csv` (
  `csv_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `yeargraduated` text,
  `course` text,
  `college` text,
  PRIMARY KEY (`csv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `csv` */

insert  into `csv`(`csv_id`,`firstname`,`middlename`,`lastname`,`yeargraduated`,`course`,`college`) values (1,'Jace ','Alomea','Gonzales','2011','BSIT','College of Arts and Sciences'),(2,'Merry ','Valdez','Jabagat','2012','BSCS','College of Education'),(3,'Edel','Bonghanoy','Brasileno','2013','BSIT','College of Engineering'),(4,'Joylyn','Santiago','Alegrado','2014','BSCS','College of Education');

/*Table structure for table `disclaimer` */

DROP TABLE IF EXISTS `disclaimer`;

CREATE TABLE `disclaimer` (
  `disclaimer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `disclaimer` text,
  PRIMARY KEY (`disclaimer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `disclaimer` */

insert  into `disclaimer`(`disclaimer_ID`,`disclaimer`) values (1,'Testing');

/*Table structure for table `election` */

DROP TABLE IF EXISTS `election`;

CREATE TABLE `election` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `election_title` text,
  `election_date` date DEFAULT NULL,
  `position1` text,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `election` */

insert  into `election`(`id`,`election_title`,`election_date`,`position1`,`start_date`,`due_date`) values (1,'Election','2019-10-10','President','2019-10-24','2019-10-09');

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` text,
  `event_type` text,
  `event_date` date DEFAULT NULL,
  `course_participants` text,
  `batch_participants` text,
  `status` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `events` */

insert  into `events`(`id`,`event_title`,`event_type`,`event_date`,`course_participants`,`batch_participants`,`status`) values (1,'Event Titl','Event Type','2019-10-17','BSIT','2019','Approve'),(2,'Event Title2','Event Type 2','2019-10-21','BSIT','2019','Approve'),(3,'Event Title 3','Event Type 3','2019-10-09','BSIT','2018','Pending');

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
  `vote` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `nominee` */

insert  into `nominee`(`id`,`firstname`,`middlename`,`lastname`,`yeargraduated`,`position`,`status`,`vote`) values (1,'Merry','Valdez','Jabagat','2020','Vice President',NULL,NULL),(2,'Admin','autofocus','Admin','autofocus','President',NULL,NULL),(3,'joy','Santiago','Alegrado','2019-2020','President',NULL,NULL),(4,'Merry','Valdez','Jabagat','2020','Vice President',NULL,NULL),(5,'Edel','Bonghanoy','BrasileÃ±o','2020','President',NULL,NULL),(6,'Merry','Valdez','Jabagat','2020','President','Approve',NULL),(7,'Edel','Bonghanoy','BrasileÃ±o','2020','President','Approve',NULL),(10,'Merry','Valdez','Jabagat','2020','Vice President','Approve',NULL),(11,'Merry','Valdez','Jabagat','2020','Corporate Secretary','Approve',NULL),(12,'Merry','Valdez','Jabagat','2020','Corporate Treasurer','Approve',NULL),(13,'Jace','Alomea','Gonzales','2020','Corporate Treasurer','Pending',NULL),(14,'Jace','Alomea','Gonzales','2020','Regional Trustees','Pending',NULL);

/*Table structure for table `position1` */

DROP TABLE IF EXISTS `position1`;

CREATE TABLE `position1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` text,
  `max_vote` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `position1` */

insert  into `position1`(`id`,`position`,`max_vote`) values (1,'President','1'),(2,'Vice President','1'),(5,'Corporate Secretary','1'),(6,'Corporate Treasurer','1'),(7,'Corporate Auditor','1'),(8,'Regional Trustees','5');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `college` text,
  `yeargraduated` text,
  `course` text,
  `sex` text,
  `email` text,
  `contact` text,
  `social` text,
  `username` text,
  `password` text,
  `role` text,
  `addressline` text,
  `city` text,
  `spr` text,
  `zip` text,
  `country` text,
  `status` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`firstname`,`middlename`,`lastname`,`college`,`yeargraduated`,`course`,`sex`,`email`,`contact`,`social`,`username`,`password`,`role`,`addressline`,`city`,`spr`,`zip`,`country`,`status`) values (39,'Jace','sdajkfhsa','sdafsa','College of Education','2013','BSCS','Male','dsaf','sadfs','sdafsa','sadf','asfd','User','safdsa','asfds','sdfsaf','sadfsa','Philippines',NULL),(40,'hjsagfaf','sadfsa','safdsa','College of Education','2012','BSCS','Male','safds','sadf','sdafsa','asdfasdfs','asfd','User','safdsa','asdfs','sadfsa','asf','Philippines',NULL),(41,'efrwewa','asdf','sadf','College of Education','2014','BSCS','Male','dasfsa','sadfsa','asdfsa','sadfsa','sadfsa','User','sadf','sadf','asfd','sdafa','Philippines',NULL),(42,'Jace','xzcv','zxcv','College of Education','2014','BSIT','Female','xzcv','xzcv','zxcv','zxcv','xzcvz','User','zxcv','zxcv','xzcv','zxcv','Philippines',NULL);

/*Table structure for table `year_graduated` */

DROP TABLE IF EXISTS `year_graduated`;

CREATE TABLE `year_graduated` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `year_graduated` text,
  PRIMARY KEY (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `year_graduated` */

insert  into `year_graduated`(`year_id`,`year_graduated`) values (2,'2011'),(3,'2012'),(4,'2013'),(5,'2014'),(6,'2015'),(11,'2016'),(12,'2017'),(13,'2018'),(14,'2019');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
