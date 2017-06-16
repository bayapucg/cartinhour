/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.16-MariaDB : Database - cart
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cart` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cart`;

/*Table structure for table `admin_users` */

DROP TABLE IF EXISTS `admin_users`;

CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin_users` */

insert  into `admin_users`(`admin_id`,`admin_name`,`admin_password`,`admin_email`,`created_at`,`updated_at`) values (1,'admin','admin','sameer@siriwebsolutions.com','2016-09-30 12:37:45','2017-03-25 05:04:35'),(3,'kiran','123456','kiran@kateit.in','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `assign_orders` */

DROP TABLE IF EXISTS `assign_orders`;

CREATE TABLE `assign_orders` (
  `delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `deliveryboy_id` int(11) NOT NULL,
  `order_id` int(250) NOT NULL,
  `pickup_time` datetime NOT NULL,
  `delivered_time` datetime NOT NULL,
  `delivery_drop` varchar(250) NOT NULL,
  `payment_mode` varchar(250) NOT NULL,
  `status` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`delivery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `assign_orders` */

insert  into `assign_orders`(`delivery_id`,`deliveryboy_id`,`order_id`,`pickup_time`,`delivered_time`,`delivery_drop`,`payment_mode`,`status`,`created_at`,`updated_at`) values (1,9,3,'0000-00-00 00:00:00','0000-00-00 00:00:00','','','','2017-03-21 10:27:20','2017-03-21 10:27:20'),(4,11,4,'0000-00-00 00:00:00','0000-00-00 00:00:00','','','','2017-03-21 12:22:42','2017-03-21 12:22:42'),(6,10,5,'2017-03-22 05:26:48','2017-03-22 12:46:53','','','','2017-03-22 08:05:50','2017-03-22 08:05:50'),(7,12,6,'0000-00-00 00:00:00','0000-00-00 00:00:00','','','','2017-03-22 08:10:18','2017-03-22 08:10:18'),(8,2,7,'2017-03-01 00:00:00','0000-00-00 00:00:00','','','','2017-03-16 00:00:00','2017-03-22 07:34:57'),(9,15,8,'0000-00-00 00:00:00','0000-00-00 00:00:00','','','','2017-03-25 07:02:26','2017-03-25 07:02:26');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`category_id`,`category_name`,`created_at`,`updated_at`) values (2,'FOOD','2017-03-20 10:56:06','2017-03-20 10:56:06'),(3,'Electronics','2017-03-21 13:42:10','2017-03-21 13:42:25'),(4,'xdfgdfg','2017-03-21 13:58:49','2017-03-21 13:58:49');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`category_id`,`category_name`,`created_at`,`updated_at`) values (1,'Books','0000-00-00 00:00:00','2017-05-15 08:00:00'),(2,'Electronics','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Fashion','0000-00-00 00:00:00','2017-03-31 11:45:14'),(4,'Food','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Grocery','0000-00-00 00:00:00','2017-03-25 06:22:36'),(6,'Category','2017-05-16 12:42:13','2017-05-16 12:42:13'),(7,'gaming','2017-06-02 11:32:07','2017-06-02 11:32:07'),(8,'dummy','2017-06-02 14:06:54','2017-06-02 14:06:54');

/*Table structure for table `cih` */

DROP TABLE IF EXISTS `cih`;

CREATE TABLE `cih` (
  `cih_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(1000) NOT NULL,
  `cih_fee` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`cih_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

/*Data for the table `cih` */

insert  into `cih`(`cih_id`,`category_name`,`cih_fee`,`created_at`,`updated_at`) values (1,'FITNESS','12%','2017-04-26 12:44:54','2017-04-26 12:44:54'),(2,'APPAREL','17%','2017-04-26 12:45:14','2017-04-26 12:45:14'),(4,'APPAREL – ACCESSORIES, INNERWEAR, SLEEPWEAR','13%','2017-04-26 12:45:59','2017-04-26 12:45:59'),(5,'AUTOMOTIVE – ACCESSORIES','15%','2017-04-26 12:46:27','2017-04-26 12:46:27'),(6,'AUTOMOTIVE – AUTOMOBILES','2%','2017-04-26 12:46:49','2017-04-26 12:46:49'),(7,'AUTOMOTIVE – OTHER SUB CATEGORIES','15%','2017-04-26 12:48:44','2017-04-26 12:48:44'),(8,'AUTOMOTIVE – HELMETS, LUBRICANTS, PARTS, VEHICLE CARE','8%','2017-04-26 12:49:01','2017-04-26 12:49:01'),(9,'AUTOMOTIVE – TYRES','3%','2017-04-26 12:49:19','2017-04-26 12:49:19'),(10,'BED AND BATH LINEN','10%','2017-04-26 12:49:41','2017-04-26 12:49:41'),(11,'BEAUTY','5%','2017-04-26 12:50:00','2017-04-26 12:50:00'),(12,'BEAUTY – FRAGRANCE','12%','2017-04-26 12:50:16','2017-04-26 12:50:16'),(13,'BUSINESS INDUSTRIAL & SCIENTIFIC SUPPLIES','8%','2017-04-26 12:50:30','2017-04-26 12:50:30'),(14,'BOOKS','12%','2017-04-26 12:50:47','2017-04-26 12:50:47'),(15,'CAMERA','4%','2017-04-26 12:51:04','2017-04-26 12:51:04'),(16,'CLOCKS','10%','2017-04-26 12:51:25','2017-04-26 12:51:25'),(17,'Chargers ','12%','2017-04-26 12:51:41','2017-04-26 12:51:41'),(18,'CRAFT MATERIALS','9%','2017-04-26 12:52:24','2017-04-26 12:52:24'),(19,'CONSUMABLE PHYSICAL GIFT CARD','5%','2017-04-26 12:52:42','2017-04-26 12:52:42'),(20,'EDUCATIONAL SOFTWARE','10%','2017-04-26 12:52:58','2017-04-26 12:52:58'),(21,'BAGS & SLEEVES – ELECTRONICS & PC, WIRELESS','135%','2017-04-26 12:53:16','2017-04-26 12:53:16'),(22,'ELECTRONIC DEVICES – EXCEPT TV, CAMERA, & CAMCORDER, CAMERA LENS, GPS DEVICES, SPEAKERS, MOBILE PHONES AND TABLETS','7%','2017-05-04 06:28:18','2017-05-04 06:28:18'),(23,'GAMING','12 %','2017-06-09 00:00:00','0000-00-00 00:00:00'),(24,'BAKERY','20%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,'PERSONAL CARE','10%','2017-06-09 03:00:00','2017-06-09 02:00:00'),(26,'FROZEN & CHILLED FOOD','15%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,'MEATS AND SEA FOODS','15%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,'PET CARE & FOOD','15%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,'FRUITS AND VEGETABLES','12%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,'BABY & KIDS','9%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,'WATCHES','13%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,'GROCERY','8%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,'FLOWERS','20%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(34,'ASSORTED JUICES','12%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(35,'FOOD','17%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(36,'ELECTRONIC ACCESSORIES ','18%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(37,'PC – DEVICES (PRINTERS & SCANNERS)','4%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(38,'ELECTRONICS – KINDLE ACCESSORIES','25%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(39,'STORAGE DEVICES (EXCEPT MEMORY CARDS & PEN DRIVES) ELECTRONICS, PC, WIRELESS','5%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(40,'EYE WEAR','17%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(41,'FASHION JEWELLERY','18%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(42,'FINE JEWELLERY STUDDED','7%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(43,'FINE JEWELLERY UNSTUDDED','4%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(44,'FURNITURE','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(45,'GPS DEVICES','4%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(46,'HOME – CUSHIONS & COVERS','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(47,'HOME IMPROVEMENT','8%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(48,'HOME SMALL APPLIANCES','3%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(49,'HOME OTHERS (EXCLUDING SMALL APPLIANCES & HOME IMPROVEMENTS)','15%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(50,'HPC – BODY SUPPORT','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(51,'INDOOR LIGHTENING (EXPECT LED BULBS)','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,'KITCHEN – NON-APPLIANCES','12%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(53,'LAPTOP BATTERY','12%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(54,'LAPTOPS','35','0000-00-00 00:00:00','0000-00-00 00:00:00'),(55,'LARGE APPLIANCES','5%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(56,'LAWN & GARDEN','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(57,'LED BULBS','8%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(58,'LUGGAGE','13%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(59,'MEDICAL EQUIPMENT','8%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(60,'MEMORY CARDS','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(61,'MOBILE PHONES AND TABLETS','3.5%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(62,'MODEMS AND NETWORKING DEVICES','6%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(63,'MONITORS','3%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(64,'MOVIES & MUSIC','5%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(65,'MUSICAL INSTRUMENTS','6%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(66,'NON-EDUCATIONAL SOFTWARE','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(67,'NURSING AND FEEDING','6%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(68,'NUTRITION','8%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(69,'OFFICE PRODUCTS','7%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(70,'PANTRY','13%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(71,'PC COMPONENTS (RAM, MOTHER BOARD)','5%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(72,'PERSONAL CARE APPLIANCES','7%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(73,'PET ACCESSORIES','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(74,'PET FOOD (EXPECT DOG FOOD)','5%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(75,'SELFIE STICKS','13%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(76,'SHOES','13%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(77,'SPEAKERS','4%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(78,'SPORTING GOODS','10%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(79,'TV','4%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(80,'USB FLASH DEVICES (PEN DRIVES)','8%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(81,'VIDEO GAMES','5%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(82,'VIDEO GAME – ACCESSORIES','7%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(83,'VIDEO GAME CONSOLES','4%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(84,'WALLETS & BACKPACKS','15%','0000-00-00 00:00:00','0000-00-00 00:00:00'),(85,'WARRANTY SERVICES','37%','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `closingfee` */

DROP TABLE IF EXISTS `closingfee`;

CREATE TABLE `closingfee` (
  `closing_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_price` varchar(500) NOT NULL,
  `closing_fee` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`closing_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `closingfee` */

insert  into `closingfee`(`closing_id`,`product_price`,`closing_fee`,`created_at`,`updated_at`) values (1,'1000','10','2017-04-28 13:09:11','2017-04-28 13:09:11'),(2,'10000','20','2017-04-28 13:09:25','2017-04-28 13:09:25'),(4,'100000','30','2017-04-28 13:11:17','2017-04-28 13:11:17');

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone_number` varchar(200) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`first_name`,`last_name`,`email`,`phone_number`,`message`,`created_at`,`updated_at`) values (1,'raghava','charee','raghava@gmail.com','7788996633','hai','2017-05-26 08:19:48','2017-05-26 08:19:48'),(2,'charee','charee','raghava2@gmail.com','7788996633','haii','2017-05-26 08:21:03','2017-05-26 08:21:03'),(4,'raghava','charee','raghava@gmail.com','7788996633','fdfdf','2017-05-26 09:55:46','2017-05-26 09:55:46'),(5,'charee','chree','charee@gmail.com','7894561230','haian','2017-05-29 12:34:34','2017-05-29 12:34:34'),(6,'blog','blog','blog@gmail.com','9966332211','hai','2017-05-29 12:35:52','2017-05-29 12:35:52');

/*Table structure for table `customer_payments` */

DROP TABLE IF EXISTS `customer_payments`;

CREATE TABLE `customer_payments` (
  `customer_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`customer_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `customer_payments` */

insert  into `customer_payments`(`customer_payment_id`,`order_id`,`customer_name`,`trans_id`,`amount`,`date_time`,`status`,`created_at`,`updated_at`) values (2,5,'fsf f','7789654123',700,'2017-03-27 14:22:27','1','2017-03-02 10:44:57','2017-03-25 09:40:59');

/*Table structure for table `deliveryboy` */

DROP TABLE IF EXISTS `deliveryboy`;

CREATE TABLE `deliveryboy` (
  `deliveryboy_id` int(11) NOT NULL AUTO_INCREMENT,
  `deliveryboy_name` varchar(20) NOT NULL,
  `deliveryboy_email` varchar(50) NOT NULL,
  `deliveryboy_mobile` varchar(20) NOT NULL,
  `deliveryboy_alternateno` varchar(50) NOT NULL,
  `deliveryboy_password` varchar(60) NOT NULL,
  `deliveryboy_address` text NOT NULL,
  `deliveryboy_bike` varchar(250) NOT NULL,
  `deliveryboy_bikeno` varchar(100) NOT NULL,
  `deliveryboy_license` varchar(250) NOT NULL,
  `deliveryboy_adhar` varchar(250) NOT NULL,
  `deliveryboy_bank` varchar(250) NOT NULL,
  `deliveryboy_photo` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`deliveryboy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `deliveryboy` */

insert  into `deliveryboy`(`deliveryboy_id`,`deliveryboy_name`,`deliveryboy_email`,`deliveryboy_mobile`,`deliveryboy_alternateno`,`deliveryboy_password`,`deliveryboy_address`,`deliveryboy_bike`,`deliveryboy_bikeno`,`deliveryboy_license`,`deliveryboy_adhar`,`deliveryboy_bank`,`deliveryboy_photo`,`status`,`created_at`,`updated_at`) values (3,'test','test@gmail.com','9632256455','7789541123','098f6bcd4621d373cade4e832627b4f6','kpkb','2589','36987','852369','','','Hydrangeas3.jpg',1,'2017-03-16 13:57:59','2017-03-24 13:09:14'),(6,'boy','boy5@gmail.com','8852369412','9125563250','a65f25e7edede6decceceeb708473398','kpkb','boy5','gdrr','35444','','','Lighthouse.jpg',1,'2017-03-18 06:03:32','2017-03-24 13:16:38'),(8,'xcsdfsf','smail.comfsdgfd@g','8523654656','9963258741','4a8bc6b09c0980dae11abbdbd9e2cbc8','xzdfdsf','sfsdf','36987','852369','','','Koala.jpg',1,'2017-03-20 09:48:52','2017-03-25 06:19:50'),(9,'addfsfs','ffdg@gmail.com','9632256455','','094fd12ec6f81b82a379ca8fcf795466','gfcfgdgfdt','2589','36987','fgdf','','','Chrysanthemum1.jpg',1,'2017-03-20 09:51:08','2017-03-20 09:51:08'),(10,'aedfffgdfgfhfg','fgdfggdf@gmail.com','9632256455','','c8d278dd28e1c4ac23774d004bce1d74','gfcfgdgfdt','2589','7896523','852369','','','Desert.jpg',1,'2017-03-21 10:47:31','2017-03-21 10:47:31'),(11,'sdsfjvgg','gfhghg@gmail.com','9632256455','','fc7588193f4e8e5b919d203d2734c58b','gfcfgdgfdt','2589','679002345','852369','','','Hydrangeas2.jpg',1,'2017-03-21 10:58:39','2017-03-21 10:58:39'),(12,'sample boy1','sample@gmail.com','9160090122','','c74995fdfa9b4e8a6ba1ba3abdc91d4c','pragathi nagar','yamaha','TS 01hh 9856','apjh55541ooH45','','','Penguins.jpg',1,'2017-03-22 08:08:26','2017-03-25 06:13:25'),(13,'boysample','wwfere@gmail.com','8852369741','9632587419','540c49c539dea7f69491fecfa988b9c7','pragathi nagar','boy','85236','852369','','','Lighthouse2.jpg',0,'2017-03-24 11:15:21','2017-03-24 11:15:21'),(14,'Ramesh','ramesh@gmail.com','9856612522','9987452121','fdf3ab3292c26a4a3a480c0b41bc7a3f','S R nagar','Yamaha','TS 09 BV 8541','APFGRTBHD1250','','','jerkin.jpg',0,'2017-03-25 06:10:04','2017-03-25 06:10:04'),(15,'Glastin','glastin@gmail.com','8458845122','4585512588','a3d3a23c14c3f6abd6b183242ef2c425','shamshabad','Yamaha- FZ','TS 12 HH 9899','TGFVBJCD45235','','','Agile.jpg',1,'2017-03-25 06:42:46','2017-03-25 06:42:46');

/*Table structure for table `kyc_reports` */

DROP TABLE IF EXISTS `kyc_reports`;

CREATE TABLE `kyc_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `kyc_reports` */

insert  into `kyc_reports`(`id`,`seller_id`,`file_name`) values (1,8,'report_1042162850.xlsx'),(2,8,'report_10421628501.xlsx'),(3,8,'report_1009127829.png'),(4,8,'report_1009127829.jpg'),(5,8,'report_660468166.jpg'),(6,8,'U'),(7,8,'U'),(8,8,'U'),(9,8,'U'),(10,8,'U'),(11,8,'report_348882407.png'),(12,8,'report_1218162651.png'),(13,1,'i');

/*Table structure for table `locations` */

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `locations` */

insert  into `locations`(`location_id`,`location_name`,`status`) values (1,'Kphb',1),(2,'Kukatpally',1),(3,'Miyapur',1),(4,'Ameerpet',1);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `order_price` varchar(500) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_address` text NOT NULL,
  `order_status` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`order_id`,`item_id`,`seller_id`,`product_name`,`order_price`,`delivery_date`,`delivery_time`,`customer_name`,`customer_email`,`customer_phone`,`customer_address`,`order_status`,`created_at`,`updated_at`) values (3,0,8,'food','','2017-03-01','10:48:55','test','abcd@gmail.com','8896325147','ddsdfsdfsf',0,'2017-05-02 06:14:00','2017-03-22 14:52:49'),(4,0,8,'phone','','2017-03-02','05:37:56','dddsd','gfdfd@gmail.com','7789632541','fhg hgh hghjgg hghjghj hgh',0,'2017-04-05 08:08:00','2017-03-02 08:36:54'),(5,0,8,'moile','','2017-03-01','08:40:55','bcgc','sad@gmail.com','89963255','dfvdfg',0,'2017-04-19 10:11:00','2017-03-30 00:00:00'),(6,0,8,'grocery','','2017-03-01','07:40:58','gggjgj','cfgfcg@gmail.com','8896325417','jhjjh hgjhguy',1,'2017-05-05 00:00:00','2017-03-24 00:00:00'),(7,0,28,'hghgfg','','2017-03-01','04:33:49','yuiuiu','j','thtr','htrhtr',2,'2017-05-05 00:00:00','0000-00-00 00:00:00'),(9,0,28,'hgjgh','','2017-05-09','04:19:00','raghava','kitgutyu','yutyuty','gvjjghjgh',0,'2017-04-21 00:00:00','2017-05-03 00:15:00');

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `payments` */

insert  into `payments`(`payment_id`,`order_id`,`customer_name`,`trans_id`,`amount`,`date_time`,`status`,`created_at`,`updated_at`) values (1,5,'test','1213232e34434',100,'2017-03-24 17:13:20','1','2017-03-15 10:51:54','2017-03-08 09:46:51');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `seller_subcategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subitem_id` int(11) NOT NULL,
  `item_name` varchar(500) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_description` text NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_cost` varchar(500) NOT NULL,
  `item_image` varchar(500) NOT NULL,
  `item_status` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`item_id`,`seller_id`,`seller_subcategory_id`,`category_id`,`subcategory_id`,`subitem_id`,`item_name`,`item_code`,`item_description`,`item_quantity`,`item_cost`,`item_image`,`item_status`,`admin_status`) values (1,8,0,1,1,0,'Manchurian','12345','sfsdfs efsdf',3,'100','',1,1),(2,6,0,1,1,0,'Noodles','5678','sdfd dfsdf',200,'300','sesame-noodles2.jpg',1,0),(3,8,0,3,12,0,'Samsung  j7','45678','grtg grgrtgr',6,'12000','Samsung-J7.jpg',1,0),(4,8,0,2,16,0,'Casual Shirt','5678','dvfdg fgfgf f gf',7,'800','download.jpg',1,0),(5,8,0,3,12,0,'micromax','4567','fdgdfg',5,'700','Penguins3.jpg',1,0),(6,8,0,1,3,0,'Chicken Biryani','5678','fghfghfgh',6,'300','images.jpg',1,1),(7,8,0,1,3,0,'Mutton Curry','8984','hgfhgf',8,'290','download_(1).jpg',1,0),(9,8,12,13,15,0,'online books','17','ftrgrtrf',23,'125','gtaarta',25,56),(10,8,0,2,16,0,'Coat','456987','sggdfg fgfgdf dfg gf',3,'950','coat1.jpg',1,0),(11,8,0,3,12,0,'Iphone 5s','54345453455','fgd fgdfgfgdfg dfgdfgdfg',7,'20000','SDL221198048_1.jpg',1,0),(12,8,0,5,9,0,'php book','0001','rtgre',1,'99','coat1.jpg',1,1),(13,8,0,5,9,0,'books','235','yuhjy',1,'99','images_(1).jpg',1,0),(14,8,0,1,2,0,'some','5221','jhdjsdsd',1,'99','bg1.jpg',1,0),(15,36,0,0,0,0,'','','',0,'','',0,0),(16,8,0,1,1,1,'some','021','hai',1,'50','013cf270-e9eb-45e1-8e3b-a9495843eb2e.jpg',1,0),(17,8,0,1,2,2,'versionone','123','hhaa',2,'520','531b43a798a6a64da8929b669dd25fc3.png',1,0),(18,1,0,1,1,1,'test1','1123','testing',2,'32','images1.jpg',1,0),(19,1,0,1,2,2,'test12','testing','ntg',3,'52','late-birthday-wishes.jpg',1,0),(20,1,0,2,3,0,'ntg','4','just',5,'65','IMG_15052017_195704_0.png',1,0),(21,1,0,2,4,0,'high','1234321','likethat',8,'9876','wait.jpg',1,0),(22,1,0,3,7,0,'rgsfg','5656','fgdfgsd',6,'4','IMG_15052017_195704_01.png',1,0),(23,1,0,5,12,0,'dfasdf','erwe','',5,'45','images_(1).jpg',1,0),(24,1,0,4,8,0,'55','5','',5,'5','images_(1)1.jpg',1,0),(25,53,0,2,3,0,'44','33','testing',3,'33','images2.jpg',1,0),(26,53,0,2,4,0,'112','2','likethat',2,'44','IMG_15052017_195704_02.png',1,0),(27,53,0,1,1,1,'3','33','likethat',3,'56','late-birthday-wishes1.jpg',1,0),(28,53,0,3,6,0,'hjh','56','56546',65,'65','images_(1)2.jpg',1,0),(29,53,0,0,0,0,'','','',0,'','',0,0);

/*Table structure for table `promotions` */

DROP TABLE IF EXISTS `promotions`;

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `phone_number` varchar(250) COLLATE utf8_bin NOT NULL,
  `message` varchar(250) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `promotions` */

insert  into `promotions`(`id`,`first_name`,`email`,`phone_number`,`message`,`created_at`,`updated_at`) values (1,'raghava','raghava@gmail.com','9966332211','dummy content','2017-06-09 11:32:33','2017-06-09 11:32:33');

/*Table structure for table `referral_fee` */

DROP TABLE IF EXISTS `referral_fee`;

CREATE TABLE `referral_fee` (
  `referral_fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `referral_fee` varchar(500) NOT NULL,
  PRIMARY KEY (`referral_fee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `referral_fee` */

insert  into `referral_fee`(`referral_fee_id`,`category_id`,`subcategory_id`,`referral_fee`) values (1,1,1,'10%'),(2,1,3,'12%'),(3,2,11,'13%'),(5,3,6,'9%'),(6,3,12,'15%'),(7,3,13,'15%'),(8,4,14,'10%'),(9,4,15,'12%'),(10,2,16,'15%');

/*Table structure for table `request_for_services` */

DROP TABLE IF EXISTS `request_for_services`;

CREATE TABLE `request_for_services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(500) COLLATE utf8_bin NOT NULL,
  `phone_number` varchar(500) COLLATE utf8_bin NOT NULL,
  `select_plan` varchar(500) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `request_for_services` */

insert  into `request_for_services`(`service_id`,`seller_id`,`seller_name`,`phone_number`,`select_plan`,`created_at`,`updated_at`) values (1,8,'charee','8985258562','Both','2017-06-10 09:10:16','2017-06-10 09:10:16'),(2,8,'charee','8985258562','Inventory management','2017-06-10 11:14:48','2017-06-10 11:14:48'),(3,69,'yuryuty','4346563356356534563565666666666666666666','Inventory management','2017-06-15 11:20:45','2017-06-15 11:20:45'),(4,69,'yuryuty','5463456345','Both','2017-06-15 12:13:48','2017-06-15 12:13:48');

/*Table structure for table `seller_all_notifications` */

DROP TABLE IF EXISTS `seller_all_notifications`;

CREATE TABLE `seller_all_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seller_all_notifications` */

/*Table structure for table `seller_basic_details` */

DROP TABLE IF EXISTS `seller_basic_details`;

CREATE TABLE `seller_basic_details` (
  `seller_basic_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `seller_address` varchar(200) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_basic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_basic_details` */

insert  into `seller_basic_details`(`seller_basic_id`,`seller_id`,`seller_name`,`seller_address`,`created_at`,`updated_at`) values (1,8,'raghava','kphb','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `seller_categories` */

DROP TABLE IF EXISTS `seller_categories`;

CREATE TABLE `seller_categories` (
  `seller_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `seller_category_id` int(11) NOT NULL,
  `category_name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_categories` */

insert  into `seller_categories`(`seller_cat_id`,`seller_id`,`seller_category_id`,`category_name`,`created_at`,`updated_at`) values (1,8,1,NULL,'2017-06-04 15:24:50','2017-06-04 15:24:50'),(2,8,2,NULL,'2017-06-04 15:28:01','2017-06-04 15:28:01'),(4,8,3,NULL,'2017-06-06 04:26:57','2017-06-06 04:26:57'),(7,8,4,NULL,'2017-06-08 07:55:06','2017-06-08 07:55:06'),(8,0,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,0,5,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,0,4,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,0,2,NULL,'2017-06-14 11:50:05','2017-06-14 11:50:05'),(12,0,2,NULL,'2017-06-14 12:00:11','2017-06-14 12:00:11'),(13,0,5,NULL,'2017-06-14 12:00:11','2017-06-14 12:00:11'),(16,65,3,NULL,'2017-06-14 12:08:52','2017-06-14 12:08:52'),(17,65,0,NULL,'2017-06-14 12:08:52','2017-06-14 12:08:52'),(18,65,2,NULL,'2017-06-14 12:10:33','2017-06-14 12:10:33'),(19,65,2,NULL,'2017-06-14 12:33:46','2017-06-14 12:33:46'),(20,65,2,NULL,'2017-06-14 12:38:49','2017-06-14 12:38:49'),(21,66,2,NULL,'2017-06-14 07:40:55','2017-06-14 07:40:55'),(22,67,2,NULL,'2017-06-15 07:13:47','2017-06-15 07:13:47'),(23,67,5,NULL,'2017-06-15 07:13:47','2017-06-15 07:13:47'),(24,67,1,NULL,'2017-06-15 07:37:31','2017-06-15 07:37:31'),(25,67,6,NULL,'2017-06-15 07:37:32','2017-06-15 07:37:32'),(26,68,2,NULL,'2017-06-15 07:48:09','2017-06-15 07:48:09'),(27,68,6,NULL,'2017-06-15 07:48:09','2017-06-15 07:48:09'),(47,71,1,'Books','2017-06-16 01:02:30','2017-06-16 01:02:30'),(48,71,7,'gaming','2017-06-16 01:02:30','2017-06-16 01:02:30'),(49,71,6,'Category','2017-06-16 01:02:30','2017-06-16 01:02:30'),(50,73,5,'Grocery','2017-06-16 01:05:12','2017-06-16 01:05:12'),(51,73,7,'gaming','2017-06-16 01:05:51','2017-06-16 01:05:51'),(53,73,2,'Electronics','2017-06-16 01:05:51','2017-06-16 01:05:51');

/*Table structure for table `seller_lists` */

DROP TABLE IF EXISTS `seller_lists`;

CREATE TABLE `seller_lists` (
  `seller_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subitem_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_lists` */

/*Table structure for table `seller_payments` */

DROP TABLE IF EXISTS `seller_payments`;

CREATE TABLE `seller_payments` (
  `seller_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `cih_comission` varchar(500) NOT NULL,
  `net_profit` varchar(500) NOT NULL,
  `order_amount` varchar(500) NOT NULL,
  `amount_status` int(11) NOT NULL DEFAULT '0',
  `invoice` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `seller_payments` */

insert  into `seller_payments`(`seller_payment_id`,`seller_id`,`order_id`,`cih_comission`,`net_profit`,`order_amount`,`amount_status`,`invoice`,`created_at`,`updated_at`) values (1,8,'6','2344','8%','1000',0,'19-apr-20172.xlsx','2017-05-05 09:13:40','2017-05-05 09:25:44');

/*Table structure for table `seller_personal_details` */

DROP TABLE IF EXISTS `seller_personal_details`;

CREATE TABLE `seller_personal_details` (
  `seller_personal_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `seller_bank_account` varchar(250) COLLATE utf8_bin NOT NULL,
  `seller_adhar` varchar(250) COLLATE utf8_bin NOT NULL,
  `seller_pan_card` varchar(250) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_personal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_personal_details` */

insert  into `seller_personal_details`(`seller_personal_id`,`seller_id`,`seller_bank_account`,`seller_adhar`,`seller_pan_card`,`created_at`,`updated_at`) values (4,8,'20157138501','','12345678918','2017-06-05 11:59:56','2017-06-05 11:59:56'),(5,8,'20157138204','123456789','1234567891','2017-06-10 09:55:34','2017-06-10 09:55:34'),(6,8,'20157138204','101010101010','1010101010101','2017-06-10 11:33:40','2017-06-10 11:33:40'),(7,8,'20157138204','101010101010','1010101010101','2017-06-10 11:45:05','2017-06-10 11:45:05'),(8,8,'65645645','45455434','34343435434','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `seller_request` */

DROP TABLE IF EXISTS `seller_request`;

CREATE TABLE `seller_request` (
  `seller_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_request` */

insert  into `seller_request`(`seller_request_id`,`seller_id`,`message`,`created_at`,`updated_at`) values (1,8,'hai','2017-05-31 13:15:22','2017-05-31 13:15:22'),(2,8,'hello sir','2017-05-31 13:15:45','2017-05-31 13:15:45'),(3,28,'You should check the $result construction code. you are not setting $result properly.','2017-06-01 13:54:26','2017-05-31 13:54:26'),(4,28,'hai sir please send me ur mobile number','2017-05-31 19:35:38','2017-05-31 19:35:38'),(5,8,'please change your password for securty purpose','2017-06-02 09:08:28','2017-06-02 09:08:28'),(6,52,'gyty','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `seller_store_details` */

DROP TABLE IF EXISTS `seller_store_details`;

CREATE TABLE `seller_store_details` (
  `seller_store_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `store_name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `addrees1` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `addrees2` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `pin_code` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `other_shops` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `other_shops_location` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `deliveryes` int(11) DEFAULT NULL,
  `weblink` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tin_vat` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tinvatimage` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tan` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tanimage` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `cst` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `cstimage` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `gstin` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`seller_store_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_store_details` */

insert  into `seller_store_details`(`seller_store_details_id`,`seller_id`,`store_name`,`addrees1`,`addrees2`,`pin_code`,`other_shops`,`other_shops_location`,`deliveryes`,`weblink`,`tin_vat`,`tinvatimage`,`tan`,`tanimage`,`cst`,`cstimage`,`gstin`,`created_at`) values (3,8,'tgggf','no',NULL,NULL,'','none',NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-05 13:06:20'),(4,1,'','test',NULL,NULL,'10-10','kkr',NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-12 17:13:48'),(5,66,'dfasd','fasdfasd','fdfasdf','52345435','dfsdfa','rewerqwer',1,'reqwerer','erqwer','AutoTPA Document.docx','erqewr','AutoTPA Site Flows & Issues. 6.6.17.docx','rqwerqwe','Autotpadeveloperdocument.docx','45errwer','2017-06-14 19:47:46'),(6,67,'ty','6','6','67677766','','',1,'urytu','yurty','cart_new.sql','yuyur','','yurtyu','','yurty','2017-06-15 07:18:17'),(7,67,'67','776','ghf','67567566','h','fghf',1,'gh','gfh','','ghfg','','gfh','cart_new.sql','ghfg','2017-06-15 07:19:26'),(8,67,'67767','6776','767','76766776','yury','ytu',1,'yur','u','','yuryu','','uryt','','yuryu','2017-06-15 07:20:30'),(9,67,'65','56','65','65655656','6','6',1,'6','56','cart_new.sql','56','','56','','56','2017-06-15 07:21:08'),(10,67,'676','76','67','76677767','fghfg','gh',1,'gh','hg','AutoTPA Document.docx','bn','','ghg','','ghgf','2017-06-15 07:26:23'),(11,67,'787','785678','67766767','67766776','7667','77',1,'7','76','AutoTPA Document.docx','67','','67','AutoTPA Document.docx','67','2017-06-15 07:30:55'),(12,67,'56','ghfg','ghdg','676776','ghfgh','gfhf',1,'ghdfg','ghfg','AutoTPA Document.docx','yrty','','tyrty','','tyrte','2017-06-15 07:38:56'),(13,68,'testing56554','hj.fgdf','fhgjkhdjfhj','234566','ghd','ghfgdh',1,'ghfghtyty','tyt','AutoTPA Document.docx','yrty65','','dfgdf','','fgsdfg','2017-06-15 07:49:33'),(14,69,'jhh','hjfg','hjfg','675677','gh','jhg',1,'hjf','hjfgh','AutoTPA Document.docx','ghjfg','AutoTPA Site Flows & Issues. 6.6.17.docx','hjfgh','Autotpadeveloperdocument.docx','ghjg','2017-06-15 09:11:33'),(15,70,'fgsdfg','fdg','gfsdfg','566656','','',1,'ghdfgh','dfgh','','gfdhd','','fghdfh','','fghfd','2017-06-15 09:30:33'),(16,71,'vasudeva','reyerty','tryert','554546','','tyetry',1,'tyerty','ghdfgh','Mike Sprint 1 & 2 Issues. 5.30.17.docx','tyerty','AutoTPA Site Flows & Issues. 6.6.17.docx','ertyrty','Autotpadeveloperdocument.docx','rty','2017-06-16 11:25:56');

/*Table structure for table `selleradmin_users` */

DROP TABLE IF EXISTS `selleradmin_users`;

CREATE TABLE `selleradmin_users` (
  `selleradmin_id` int(11) NOT NULL AUTO_INCREMENT,
  `selleradmin_name` varchar(250) NOT NULL,
  `selleradmin_password` varchar(250) NOT NULL,
  `selleradmin_email` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`selleradmin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `selleradmin_users` */

insert  into `selleradmin_users`(`selleradmin_id`,`selleradmin_name`,`selleradmin_password`,`selleradmin_email`,`created_at`,`updated_at`) values (1,'admin','admin','sameer@siriwebsolutions.com','2016-09-30 12:37:45','2016-09-30 13:22:48'),(2,'kiran','Kiran@123','kiran@kateit.in','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `sellers` */

DROP TABLE IF EXISTS `sellers`;

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_rand_id` varchar(200) NOT NULL,
  `seller_name` varchar(20) NOT NULL,
  `seller_email` varchar(50) NOT NULL,
  `seller_address` varchar(500) NOT NULL,
  `seller_mobile` bigint(20) NOT NULL,
  `seller_password` varchar(60) NOT NULL,
  `password_status` varchar(250) NOT NULL,
  `seller_bank_account` varchar(250) DEFAULT NULL,
  `seller_pan_card` varchar(250) DEFAULT NULL,
  `seller_adhar` varchar(250) DEFAULT NULL,
  `first_time` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

/*Data for the table `sellers` */

insert  into `sellers`(`seller_id`,`seller_rand_id`,`seller_name`,`seller_email`,`seller_address`,`seller_mobile`,`seller_password`,`password_status`,`seller_bank_account`,`seller_pan_card`,`seller_adhar`,`first_time`,`created_at`,`updated_at`) values (1,'0','vasudevareddy','vasu@gmail.com','vasu@gmail.com',7789654123,'64c9ac2bb5fe46c3ac32844bb97be6bc','',NULL,NULL,NULL,1,'2017-06-12 17:13:21','2017-06-12 17:13:21'),(3,'0','Rakesh','test@gmail.com','',9160090122,'827CCB0EEA8A706C4C34A16891F84E7B','',NULL,NULL,NULL,0,'2017-03-24 13:00:56','2017-03-25 05:09:22'),(4,'0','sandeep','sandeep@siriwebsolutions.com','',9160090122,'a3d3a23c14c3f6abd6b183242ef2c425','',NULL,NULL,NULL,0,'2017-03-25 05:25:09','2017-03-25 05:25:09'),(8,'SEL394523','charee','raghava@gmail.com','kphb',7097919454,'e10adc3949ba59abbe56e057f20f883e','0',NULL,NULL,NULL,0,'2017-06-08 11:25:46','2017-06-08 11:25:46'),(36,'676289','boy','boy@gmail.com','',7095235504,'5d529761dc52fd42c154a365dbb67552','',NULL,NULL,NULL,0,'2017-06-01 12:05:51','2017-06-01 12:05:51'),(50,'SEL997636','','','',9494422779,'ab3a04f203c699c751e14f59632abb10','0',NULL,NULL,NULL,0,'2017-06-08 08:57:13','2017-06-08 08:57:13'),(51,'SEL388200','','','',8985258562,'24877958a75e165a4012c6627fb8b652','0',NULL,NULL,NULL,0,'2017-06-12 07:44:18','2017-06-12 07:44:18'),(52,'SEL617492','','','',8500050944,'e10adc3949ba59abbe56e057f20f883e','0',NULL,NULL,NULL,0,'2017-06-12 17:12:54','2017-06-12 17:12:54'),(53,'SEL105629','','','',3214569870,'e10adc3949ba59abbe56e057f20f883e','0',NULL,NULL,NULL,0,'2017-06-13 04:25:42','2017-06-13 04:25:42'),(54,'SEL280735','','','',9696969696,'e10adc3949ba59abbe56e057f20f883e','0',NULL,NULL,NULL,0,'2017-06-13 11:36:56','2017-06-13 11:36:56'),(55,'SEL439996','','','',8585858585,'35c76363da1466a0a032f20bb4bcdb0b','0',NULL,NULL,NULL,0,'2017-06-13 11:43:40','2017-06-13 11:43:40'),(56,'SEL504333','','','',8985543855,'01ae7ee32b4a96ccf18b1d3e540d2446','0',NULL,NULL,NULL,0,'2017-06-13 18:34:05','2017-06-13 18:34:05'),(57,'SEL108416','','','',8019345212,'957253f3ce261ee4a0a3cfeb77afd471','0',NULL,NULL,NULL,0,'2017-06-14 08:07:31','2017-06-14 08:07:31'),(58,'SEL158653','','','',6574567456,'8032212700eea147ae8f1801ce47e888','0',NULL,NULL,NULL,0,'2017-06-14 11:05:27','2017-06-14 11:05:27'),(59,'SEL708195','','','',6346345634,'00764cd6bc5ba87940871af9d8690321','0',NULL,NULL,NULL,0,'2017-06-14 11:06:50','2017-06-14 11:06:50'),(60,'SEL834248','','','',6745674567,'35a649899f2c9879ac9021a46a32449e','0',NULL,NULL,NULL,0,'2017-06-14 11:07:30','2017-06-14 11:07:30'),(61,'SEL147775','','','',5675674674,'71a0de8655374ccd3f0435a318ba58cd','0',NULL,NULL,NULL,0,'2017-06-14 11:40:08','2017-06-14 11:40:08'),(62,'SEL160919','','','',4524352345,'973686049de52e8b7c76ea8e9275dc4c','0',NULL,NULL,NULL,0,'2017-06-14 11:44:15','2017-06-14 11:44:15'),(63,'SEL772761','','','',5634563565,'22e9b282b624d228ba97475615b3ddf3','0',NULL,NULL,NULL,0,'2017-06-14 11:45:13','2017-06-14 11:45:13'),(64,'SEL517406','','','',5745674564,'7611723cce3ad6b2815ecc3f180a0f1c','0',NULL,NULL,NULL,0,'2017-06-14 11:55:06','2017-06-14 11:55:06'),(65,'SEL211968','yurtyuty','yutyu@gmai.com','fdfhfghdfg',5745674567,'7907c7ee8a3b14249e64d0959e3c51ae','0','jkgjkghj','667456756','75676745674567456',0,'2017-06-14 12:28:10','2017-06-14 12:28:10'),(66,'SEL606435','vzfgsdfg','fdgsdf@gmail.com','dfasdfasd',4352345235,'96b3a768570e60af3f403bc5b941eb7b','0','dfasdf','fgsdfgsdg','123456789087',0,'2017-06-14 19:48:33','2017-06-14 19:48:33'),(67,'SEL918097','testing','test@gmail.com','likethat',5446446545,'02c1dcef75ec66267c7c53b518f0a47e','0','sbi mydukur','tst','123456789009',0,'2017-06-15 07:41:13','2017-06-15 07:41:13'),(68,'SEL515837','vasu','vasu@gmail.com','testing',3453434434,'e10adc3949ba59abbe56e057f20f883e','0','6786856867867','7876','7856787857878',1,'2017-06-15 07:57:50','2017-06-15 07:57:50'),(69,'SEL358314','yuryutyfdgfdg','u@gmail.cofgfdm','hdfhdfghdff',6545675674,'e10adc3949ba59abbe56e057f20f883e','0','785675867867','7ityui','123456789090',1,'2017-06-15 09:11:50','2017-06-15 09:11:50'),(70,'SEL197679','6756','hghg@gmail.com','fgfdg',6767657567,'e10adc3949ba59abbe56e057f20f883e','0','756376767676756','7546gf','65676575676576',1,'2017-06-15 09:31:06','2017-06-15 09:31:06'),(71,'SEL571419','trye','tyerty@gmail.com','rtyrtey',5634643564,'e10adc3949ba59abbe56e057f20f883e','0','746757476746767','746747','45674674674676754',1,'2017-06-15 09:39:57','2017-06-15 09:39:57'),(72,'SEL501919','','','',6746756746,'b54d197c5b953cb617dc2cb488620a7e','0',NULL,NULL,NULL,0,'2017-06-15 12:26:19','2017-06-15 12:26:19'),(73,'SEL915193','785678','785678@gmail.com','gjhghgrwe',5654635634,'e7c6bbcef3264132e87965873196cddd','0',NULL,NULL,NULL,0,'2017-06-16 13:04:32','2017-06-16 13:04:32');

/*Table structure for table `servicefee` */

DROP TABLE IF EXISTS `servicefee`;

CREATE TABLE `servicefee` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_fee` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `servicefee` */

insert  into `servicefee`(`service_id`,`service_fee`,`created_at`,`updated_at`) values (1,'1.3%','2017-04-28 13:33:38','2017-04-28 13:33:38');

/*Table structure for table `shipping` */

DROP TABLE IF EXISTS `shipping`;

CREATE TABLE `shipping` (
  `weight_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_weight` int(11) NOT NULL,
  `shipping_charges` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `shipping` */

insert  into `shipping`(`weight_id`,`product_weight`,`shipping_charges`,`created_at`,`updated_at`) values (1,500,30,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,1000,60,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,1500,90,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,2000,120,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,2500,150,'2017-04-27 08:29:54','2017-04-27 08:29:54'),(6,3000,180,'2017-04-27 08:30:08','2017-04-27 08:30:08'),(7,3500,210,'2017-04-27 08:30:39','2017-04-27 08:30:39');

/*Table structure for table `sub_items` */

DROP TABLE IF EXISTS `sub_items`;

CREATE TABLE `sub_items` (
  `subitem_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_id` int(11) NOT NULL,
  `subitem_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`subitem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `sub_items` */

insert  into `sub_items`(`subitem_id`,`subcategory_id`,`subitem_name`,`created_at`,`updated_at`,`category_id`) values (1,1,'php','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(2,2,'mysql','0000-00-00 00:00:00','0000-00-00 00:00:00',1);

/*Table structure for table `subcategories` */

DROP TABLE IF EXISTS `subcategories`;

CREATE TABLE `subcategories` (
  `subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `subcategories` */

insert  into `subcategories`(`subcategory_id`,`category_id`,`subcategory_name`,`created_at`,`updated_at`) values (1,1,'online books','2017-05-16 10:00:00','2017-05-16 11:00:00'),(2,1,'online general books','2017-05-16 09:00:00','2017-05-16 09:00:00'),(3,2,'tabs','2017-05-16 10:00:00','2017-05-16 11:00:00'),(4,2,'laptops','2017-05-16 15:00:00','2017-05-16 10:00:00'),(5,2,'mobiles','2017-05-16 09:00:00','2017-05-16 11:00:00'),(6,3,'Womens clothing','2017-05-16 08:00:00','2017-05-16 10:00:00'),(7,3,'Mens clothing','2017-05-16 11:00:00','2017-05-16 14:00:00'),(8,4,'Veg items','2017-05-16 10:00:00','2017-05-16 13:00:00'),(10,4,'Non-Veg items','2017-05-16 11:00:00','2017-05-16 10:00:00'),(11,5,'Ayurvedic','2017-05-16 09:00:00','2017-05-16 13:00:00'),(12,5,'Bread Dairy & Eggs','2017-05-16 08:00:00','2017-05-16 09:00:00'),(13,5,'Beverages','2017-05-16 07:00:00','2017-05-16 08:00:00'),(14,5,'Branded Foods','2017-05-16 09:00:00','2017-05-16 12:00:00'),(16,5,'Dals & Pulses','2017-05-16 08:00:00','2017-05-16 07:00:00'),(17,5,'Dry Fruits','2017-05-16 13:00:00','2017-05-16 11:00:00'),(18,5,' Edible Oils & Ghee','2017-05-16 10:00:00','2017-05-16 10:00:00'),(20,5,'Flours &Sooji','2017-05-16 09:00:00','2017-05-16 12:00:00'),(21,5,'Household','2017-05-16 08:00:00','2017-05-16 08:00:00'),(23,5,'Imported & Gourmet','2017-05-16 09:00:00','2017-05-16 07:00:00'),(28,5,'Masalas & Spices','2017-05-16 07:00:00','2017-05-16 07:00:00'),(30,5,'Meat','2017-05-16 06:00:00','2017-05-16 11:00:00'),(31,5,'Organic Staples','2017-05-16 13:00:00','2017-05-16 09:00:00'),(32,5,'Personal Care','2017-05-16 08:00:00','2017-05-16 11:00:00'),(33,5,'Rice & Rice Products','2017-05-16 08:00:00','2017-05-16 11:00:00'),(34,5,'Salt, Sugar & Jaggery','2017-05-16 10:00:00','2017-05-16 09:00:00'),(35,1,'lol','2017-05-31 13:08:06','2017-05-31 13:08:06');

/*Table structure for table `subcategory` */

DROP TABLE IF EXISTS `subcategory`;

CREATE TABLE `subcategory` (
  `seller_subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subitem_id` int(11) NOT NULL,
  PRIMARY KEY (`seller_subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `subcategory` */

insert  into `subcategory`(`seller_subcategory_id`,`seller_id`,`category_id`,`subcategory_id`,`subitem_id`) values (1,8,1,1,0),(2,8,3,12,0),(3,8,1,3,0),(4,8,2,16,0),(5,8,4,15,0);

/*Table structure for table `tmpcart` */

DROP TABLE IF EXISTS `tmpcart`;

CREATE TABLE `tmpcart` (
  `cart_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cart_data` text NOT NULL,
  UNIQUE KEY `cart_id` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tmpcart` */

insert  into `tmpcart`(`cart_id`,`cart_data`) values (2,'a:0:{}'),(3,'a:0:{}'),(4,'a:1:{s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:2:\"id\";s:1:\"6\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";s:3:\"500\";s:4:\"name\";s:10:\"skin cream\";s:8:\"subtotal\";i:500;}}');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_summary` text NOT NULL,
  `identifier` varchar(500) NOT NULL,
  `provider` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `forgot_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_name`,`user_email`,`user_mobile`,`user_password`,`user_summary`,`identifier`,`provider`,`created_at`,`updated_at`,`status`,`forgot_status`) values (1,'kiran','kiran@kateit.in',0,'cfca875af8f6742c515863628cf0bd35','','','','2017-04-14 14:02:47','2017-04-14 14:02:47',1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
