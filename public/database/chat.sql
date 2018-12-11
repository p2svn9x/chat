/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.34-MariaDB : Database - chat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`chat` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `chat`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `discription` varchar(250) DEFAULT NULL,
  `content` text,
  `status` int(1) DEFAULT '1',
  `browse_articles` int(1) DEFAULT '0',
  `browse_show` int(1) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `article` */

insert  into `article`(`id`,`user_id`,`menu_id`,`name`,`img`,`view`,`discription`,`content`,`status`,`browse_articles`,`browse_show`,`sort`,`created_at`,`updated_at`) values (411,4,6,'dwd','/public/images/aritcle/337912722_6277.jpg',0,'321','<p>eeew</p>',1,0,1,1,NULL,'2018-06-17 14:15:21'),(412,3,4,'ewrew','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(413,2,5,'yrtg','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(414,2,7,'rgvrd','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(415,2,7,'fdg','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(416,2,4,'wefewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(417,2,6,'fewfew','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,1,NULL,'2018-06-16 09:46:09'),(418,2,6,'grvdr','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(419,2,4,'t3443','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(420,3,5,'fewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(421,1,7,'cfesdf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(422,2,5,'ewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(423,3,6,'gfdgd','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(424,2,4,'ecdfs','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(425,3,5,'wewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(426,2,4,'ewfew','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(427,2,4,'dwwd','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(428,2,5,'dwdx','public/images/aritcle/5ac923fddf263df773c562e5df053d5c.PNG',0,'dwd','<p>dwdw</p>',1,0,1,0,'2018-06-18 16:41:30','2018-06-18 16:41:30'),(429,2,5,'dwdx','public/images/aritcle/5ac923fddf263df773c562e5df053d5c.PNG',0,'dwd','<p>dwdw</p>',1,0,1,0,'2018-06-18 16:42:34','2018-06-18 16:42:34'),(411,4,6,'dwd','/public/images/aritcle/337912722_6277.jpg',0,'321','<p>eeew</p>',1,0,1,1,NULL,'2018-06-17 14:15:21'),(412,3,4,'ewrew','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(413,2,5,'yrtg','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(414,2,7,'rgvrd','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(415,2,7,'fdg','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(416,2,4,'wefewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(417,2,6,'fewfew','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,1,NULL,'2018-06-16 09:46:09'),(418,2,6,'grvdr','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(419,2,4,'t3443','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(420,3,5,'fewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(421,1,7,'cfesdf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(422,2,5,'ewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(423,3,6,'gfdgd','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(424,2,4,'ecdfs','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(425,3,5,'wewf','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(426,2,4,'ewfew','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(427,2,4,'dwwd','/public/images/aritcle/337912722_6277.jpg',0,'321','eeew',1,0,1,0,NULL,NULL),(428,2,5,'dwdx','public/images/aritcle/5ac923fddf263df773c562e5df053d5c.PNG',0,'dwd','<p>dwdw</p>',1,0,1,0,'2018-06-18 16:41:30','2018-06-18 16:41:30'),(429,2,5,'dwdx','public/images/aritcle/5ac923fddf263df773c562e5df053d5c.PNG',0,'dwd','<p>dwdw</p>',1,0,1,0,'2018-06-18 16:42:34','2018-06-18 16:42:34');

/*Table structure for table `friends` */

DROP TABLE IF EXISTS `friends`;

CREATE TABLE `friends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `subscribe` varchar(100) DEFAULT NULL,
  `lass_time` datetime DEFAULT NULL,
  `notification` int(1) DEFAULT '1',
  `status` int(1) DEFAULT '0',
  `block` int(1) DEFAULT '0',
  `type` int(2) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `friends` */

insert  into `friends`(`id`,`user_id`,`author`,`subscribe`,`lass_time`,`notification`,`status`,`block`,`type`,`created_at`,`updated_at`) values (1,1,3,'ddwqd','2018-12-11 14:38:25',1,1,0,1,'2018-12-11 14:38:38','2018-12-11 14:38:41');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `block` int(1) DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`phone`,`status`,`block`,`avatar`,`token`,`created_at`,`updated_at`,`remember_token`,`last_login`) values (1,'may1','$2y$10$0hUVf0iZz5bzw9yhDUq0hORMd5CD2m5c8GadJSwHKRRE901T9Jb72','may1@gmail.com','0353300993',1,0,'/images/337912722_6277.jpg','185a9b2a6b5fa27e61026cf46b4bb95884bb087ccad7c61dc34b2cb4a154c8d04594fe5cc272cdf1abf5890df2d6c368d1192f61db5a70748382f0693419b31e','2018-12-03 08:29:44','2018-12-11 18:12:29','Ch2KbdfI3EM5iKt6OICO3mWn2mEmQJW0efsbwOPDr3qV3fpN9JYLargdXUsn','2018-12-11 06:12:29'),(3,'may2','$2y$10$0hUVf0iZz5bzw9yhDUq0hORMd5CD2m5c8GadJSwHKRRE901T9Jb72','may2@gmail.com','0353300993',1,0,'/images/337912722_6277.jpg',NULL,'2018-12-03 08:29:44','2018-12-03 08:29:44','0hdDBeY7Qk0jISRAVRXimnb3CjLlo8CiMkFFgcGwj8Lio5NiJNyblkQjtyy0',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
