-- MySQL dump 10.15  Distrib 10.0.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: gallery
-- ------------------------------------------------------
-- Server version	10.0.22-MariaDB-0ubuntu0.15.10.1

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
-- Table structure for table `phototb`
--

DROP TABLE IF EXISTS `phototb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phototb` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `uploaded_date` datetime NOT NULL,
  `file_path` varchar(255) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phototb`
--

LOCK TABLES `phototb` WRITE;
/*!40000 ALTER TABLE `phototb` DISABLE KEYS */;
INSERT INTO `phototb` VALUES (1,'26939_1.jpg','admin','2016-01-16 09:46:19','26939_1.jpg'),(2,'9a076f858ecebec5f99d24bc2bdbd34a.jpg','admin','2016-01-16 09:46:25','9a076f858ecebec5f99d24bc2bdbd34a.jpg'),(3,'c22e7c7865a5582e97c908219d49111a.jpg','admin','2016-01-16 09:46:57','c22e7c7865a5582e97c908219d49111a.jpg'),(4,'jaqen_h_ghar_and_arya_stark_by_restriss-d64qups.jpg','admin','2016-01-16 09:47:18','jaqen_h_ghar_and_arya_stark_by_restriss-d64qups.jpg'),(5,'1896806_894336107301576_5703323688777461715_n.jpg','admin','2016-01-16 09:48:05','1896806_894336107301576_5703323688777461715_n.jpg');
/*!40000 ALTER TABLE `phototb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertb`
--

DROP TABLE IF EXISTS `usertb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertb`
--

LOCK TABLES `usertb` WRITE;
/*!40000 ALTER TABLE `usertb` DISABLE KEYS */;
INSERT INTO `usertb` VALUES (1,'admin','admin'),(2,'aungko','aungko');
/*!40000 ALTER TABLE `usertb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-17  9:45:36
