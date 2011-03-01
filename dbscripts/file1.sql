/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.1.36-community-log : Database - luyen_tam
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `kinh` */

DROP TABLE IF EXISTS `kinh`;

CREATE TABLE `kinh` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(512) DEFAULT NULL,
  `parent` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `kinh` */

insert  into `kinh`(`id`,`name`,`parent`) values (1,'Phap Cu',NULL),(2,'Phẩm 1:  Phẩm Song Yếu',1),(3,'Pham 2',1);

/*Table structure for table `noi_dung` */

DROP TABLE IF EXISTS `noi_dung`;

CREATE TABLE `noi_dung` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noi_dung` text,
  `hinh_anh` varchar(512) DEFAULT NULL,
  `kinh` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `noi_dung` */

insert  into `noi_dung`(`id`,`noi_dung`,`hinh_anh`,`kinh`) values (1,'Ý dẫn đầu các pháp,\r\nÝ làm chủ, ý tạo;\r\nNếu với ý ô nhiễm,\r\nNói lên hay hành động,\r\nKhổ não bước theo sau,\r\nNhư xe, chân vật kéo.','DS001.jpg',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
