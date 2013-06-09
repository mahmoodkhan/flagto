-- MySQL dump 10.13  Distrib 5.1.68, for apple-darwin12.2.1 (i386)
--
-- Host: localhost    Database: flagto
-- ------------------------------------------------------
-- Server version	5.1.68

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `flagto`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `flagto` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `flagto`;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `handle` varchar(50) DEFAULT NULL,
  `lat` decimal(10,7) DEFAULT NULL,
  `lon` decimal(10,7) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'joe','6e9648025d86dda5983bb5846ebcb10891ad30a0',NULL,'Joe Schmoe','503-010-1010','45 SW Ankeny St. Portland OR 97204',NULL,NULL,NULL,'2013-06-08 21:30:39','2013-06-08 21:30:39'),(3,'bob','1cbb199945da3bceabb21496c9439ea61fad9f04',NULL,'Bob Smith','503-101-0101','',NULL,NULL,NULL,'2013-06-08 21:30:59','2013-06-08 21:30:59'),(4,'sarah','6c1649509fde24945e5310bbdfc127a9d659c5ad',NULL,'Sarah Johnson','503-001-0010','',NULL,NULL,NULL,'2013-06-08 21:31:20','2013-06-08 21:31:20'),(5,'d12','0a4b67230e8caf244060d44f2ea72a5cd036c2e5',NULL,'q ','781623','123g',NULL,NULL,NULL,'2013-06-08 22:26:25','2013-06-08 22:26:25'),(6,'FredJames','077d7fefb5fe43ca8f8440b3c8eae7bbfd4d0d3e',NULL,'Fred James','555 555 5555','',NULL,NULL,NULL,'2013-06-09 10:15:29','2013-06-09 10:15:29'),(7,'JJohnson','17a7fa0bb2edec2164d3dd822c19f19e55ef3f64',NULL,'Jimmy Johnson','565 7777','456 Chickenvale Rd',NULL,NULL,NULL,'2013-06-09 14:07:39','2013-06-09 14:07:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-06-09 15:46:07
