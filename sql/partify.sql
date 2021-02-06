-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: 1108
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `bookingId` int NOT NULL AUTO_INCREMENT,
  `userId` int NOT NULL,
  `eventName` varchar(60) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `meal` varchar(1) NOT NULL,
  `photography` varchar(1) NOT NULL,
  `videography` varchar(1) NOT NULL,
  `decoration` varchar(1) NOT NULL,
  `location` varchar(1) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`bookingId`,`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (1,1,'Bday','Bday','2021-01-20','00:00:12','00:00:05','y','y','y','n','',NULL),(2,1,'Bday','Bday','2021-01-20','00:12:00','00:05:00','y','y','y','n','',NULL),(9,1,'new','','2021-01-05','16:03:00','21:57:00','N','N','N','N','',NULL),(11,1,'new','','2021-01-05','16:03:00','21:57:00','N','N','N','N','',NULL),(14,1,'new','','2021-01-05','16:03:00','21:57:00','N','N','N','N','',NULL),(15,1,'new','','2021-01-05','16:03:00','21:57:00','N','N','N','N','',NULL),(16,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(17,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(18,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(19,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(20,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(21,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(22,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(23,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(24,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(25,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(26,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(27,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(28,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(29,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(30,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(31,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(32,1,'ewfse','','2021-01-05','17:06:00','22:01:00','N','N','N','N','',NULL),(33,6,'harsha','','2021-02-03','17:37:00','17:40:00','Y','Y','Y','N','',NULL),(37,1,'123','Bachelors Party','2021-02-26','05:22:00','06:22:00','N','N','N','N','','PENDING'),(38,1,'123','Bachelors Party','2021-02-26','05:22:00','06:22:00','N','N','N','N','','PENDING'),(39,1,'123','Bachelors Party','2021-02-26','05:22:00','06:22:00','N','N','N','N','','PENDING'),(40,1,'My event','Get Together','2021-02-28','08:08:00','08:08:00','Y','Y','N','N','','PENDING'),(41,1,'My event','Get Together','2021-02-28','08:08:00','08:08:00','Y','Y','N','N','','PENDING'),(42,1,'party','Wedding Ceromony','2021-02-02','07:26:00','02:31:00','Y','N','N','N','','PENDING'),(43,1,'party','Wedding Ceromony','2021-02-02','07:26:00','02:31:00','Y','N','N','N','','PENDING'),(44,1,'party','Wedding Ceromony','2021-02-02','07:26:00','02:31:00','Y','N','N','N','','PENDING'),(45,1,'party','Wedding Ceromony','2021-02-02','07:26:00','02:31:00','Y','N','N','N','','PENDING'),(46,1,'party','Wedding Ceromony','2021-02-02','07:26:00','02:31:00','Y','N','N','N','','PENDING'),(47,1,'dfgdfgd','Wedding Ceromony','2021-02-03','02:42:00','07:37:00','Y','N','N','N','','PENDING'),(48,1,'harsha','Wedding Ceromony','2021-02-01','02:46:00','06:44:00','Y','Y','N','N','','PENDING'),(49,1,'ddsf','BirthDay Party','2021-02-02','21:26:00','20:30:00','Y','N','N','N','N','PENDING'),(50,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','N','N','N','PENDING'),(51,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','N','N','N','PENDING'),(52,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','N','N','N','PENDING'),(53,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','N','N','N','PENDING'),(54,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','N','N','N','PENDING'),(55,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','N','N','N','PENDING'),(56,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','N','N','N','PENDING'),(57,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','Y','N','N','PENDING'),(58,1,'Partify','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','Y','N','N','PENDING'),(59,1,'456465321321','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','Y','N','N','PENDING'),(60,1,'456465321321','Get Together','2021-02-01','04:29:00','22:28:00','Y','N','N','N','N','PENDING'),(61,1,'456465321321','Get Together','2021-02-01','04:29:00','22:28:00','Y','Y','Y','N','N','PENDING');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catering`
--

DROP TABLE IF EXISTS `catering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catering` (
  `spId` int NOT NULL,
  `breakfast` varchar(1) NOT NULL,
  `lunch` varchar(1) NOT NULL,
  `dinner` varchar(1) NOT NULL,
  `breakfastPlate` decimal(10,0) DEFAULT NULL,
  `lunchPlate` decimal(10,0) DEFAULT NULL,
  `dinnerPlate` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`spId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catering`
--

LOCK TABLES `catering` WRITE;
/*!40000 ALTER TABLE `catering` DISABLE KEYS */;
INSERT INTO `catering` VALUES (14,'Y','Y','N',450,450,0),(15,'N','N','Y',0,0,789);
/*!40000 ALTER TABLE `catering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cateringbooking`
--

DROP TABLE IF EXISTS `cateringbooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cateringbooking` (
  `bookingId` int NOT NULL,
  `spId` int NOT NULL,
  `mealName` varchar(45) NOT NULL,
  `noOfPlates` int NOT NULL,
  PRIMARY KEY (`bookingId`,`spId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cateringbooking`
--

LOCK TABLES `cateringbooking` WRITE;
/*!40000 ALTER TABLE `cateringbooking` DISABLE KEYS */;
INSERT INTO `cateringbooking` VALUES (47,16,'Y',1000),(48,16,'Y',5000),(49,16,'dinner',5000000),(50,16,'lunch',1230),(51,16,'lunch',1230),(52,16,'lunch',1230),(53,16,'lunch',1230),(54,16,'lunch',65536),(55,16,'lunch',65536),(56,16,'lunch',65536),(57,16,'lunch',65536),(58,16,'lunch',65536),(59,16,'lunch',65536);
/*!40000 ALTER TABLE `cateringbooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `messege` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` VALUES (1,'Shanika Amarathunga','shani.darshi.dr@gmail.com',1111111,'qqqqqqqqqqqqqqqqqqqqqqqqqq'),(2,'Shanika Amarathunga','shani.darshi.dr@gmail.com',1111111,'WWWWWWWWWWWWWWWWWWWWWWWWWWWWWW'),(3,'Amal amarasinghe','amal.rd@gmail.com',2147483647,'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),(4,'Rojja','rojja.roy@gmail.com',119,'I was forced to do this. Save me!!!'),(5,'Shanika Amarathunga','shani.darshi.dr@gmail.com',1111111,'111111111111111111111111111111'),(6,'ddd ddd','sda@gamil.com',2147483647,'abcdefghijklmnopqrstuvwxyz'),(7,'ddd ddd','kma@gmail.com',2147483647,'abcdefghijklmnopqrstuvwxyz'),(8,'K.H.H Piyumali','abeyvickramav@gmail.com',768001081,'dfsdfjasbdkjabsdkjabsdkjabsdkjbaksdjbaskdjbaskdjbaksjdbkajsbdjasbdkas'),(9,'K.H.H Piyumali','abeyvickramav@gmail.com',768001081,'dfsdfjasbdkjabsdkjabsdkjabsdkjbaksdjbaskdjbaskdjbaksjdbkajsbdjasbdkas'),(10,'K.H.H Piyumali','abeyvickramav@gmail.com',768001081,'dfsdfjasbdkjabsdkjabsdkjabsdkjbaksdjbaskdjbaskdjbaksjdbkajsbdjasbdkas');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `decoration`
--

DROP TABLE IF EXISTS `decoration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `decoration` (
  `pId` int NOT NULL AUTO_INCREMENT,
  `spId` int NOT NULL,
  `type` varchar(45) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`pId`,`spId`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `decoration`
--

LOCK TABLES `decoration` WRITE;
/*!40000 ALTER TABLE `decoration` DISABLE KEYS */;
/*!40000 ALTER TABLE `decoration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `decorationbooking`
--

DROP TABLE IF EXISTS `decorationbooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `decorationbooking` (
  `bookingId` int NOT NULL,
  `spId` int NOT NULL,
  `decorationType` varchar(45) NOT NULL,
  PRIMARY KEY (`bookingId`,`spId`),
  CONSTRAINT `bookId` FOREIGN KEY (`bookingId`) REFERENCES `booking` (`bookingId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `decorationbooking`
--

LOCK TABLES `decorationbooking` WRITE;
/*!40000 ALTER TABLE `decorationbooking` DISABLE KEYS */;
/*!40000 ALTER TABLE `decorationbooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location` (
  `pId` int NOT NULL AUTO_INCREMENT,
  `spId` int NOT NULL,
  `packtype` varchar(45) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `address` varchar(150) NOT NULL,
  `ac` varchar(1) NOT NULL,
  `pool` varchar(1) NOT NULL,
  PRIMARY KEY (`pId`,`spId`,`packtype`,`address`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,15,'wow',345,'345','matara','Y','Y');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locationbooking`
--

DROP TABLE IF EXISTS `locationbooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locationbooking` (
  `bookingId` int NOT NULL,
  `spId` int NOT NULL,
  `locationType` varchar(45) NOT NULL,
  PRIMARY KEY (`bookingId`,`spId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locationbooking`
--

LOCK TABLES `locationbooking` WRITE;
/*!40000 ALTER TABLE `locationbooking` DISABLE KEYS */;
/*!40000 ALTER TABLE `locationbooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photography`
--

DROP TABLE IF EXISTS `photography`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photography` (
  `pId` int NOT NULL AUTO_INCREMENT,
  `spId` int NOT NULL,
  `albumType` varchar(45) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`pId`,`spId`,`albumType`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photography`
--

LOCK TABLES `photography` WRITE;
/*!40000 ALTER TABLE `photography` DISABLE KEYS */;
INSERT INTO `photography` VALUES (1,1,'type1',500,'bla bla bla'),(2,2,'abc',1000,'456'),(3,2,'asdasdasd',5000,'asdasd'),(4,2,'dfsd456',100,'20000000'),(5,14,'456',456,'789'),(6,14,'sfsdfsdf',450,'678'),(7,15,'Type 123',152000,'jhasdjhs'),(8,16,'sfsdfsdf',678,'789');
/*!40000 ALTER TABLE `photography` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photographybooking`
--

DROP TABLE IF EXISTS `photographybooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photographybooking` (
  `bookingId` int NOT NULL,
  `spId` int NOT NULL,
  `albumType` varchar(45) NOT NULL,
  PRIMARY KEY (`bookingId`,`spId`),
  CONSTRAINT `bookingId` FOREIGN KEY (`bookingId`) REFERENCES `booking` (`bookingId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photographybooking`
--

LOCK TABLES `photographybooking` WRITE;
/*!40000 ALTER TABLE `photographybooking` DISABLE KEYS */;
INSERT INTO `photographybooking` VALUES (53,16,'.sfsdfsdf.'),(54,16,'.sfsdfsdf.'),(55,16,'.sfsdfsdf.'),(56,16,'.sfsdfsdf.'),(57,16,'.sfsdfsdf.'),(58,16,'.sfsdfsdf.'),(59,16,'.sfsdfsdf.');
/*!40000 ALTER TABLE `photographybooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service` (
  `spId` int NOT NULL,
  `catering` varchar(1) NOT NULL,
  `photography` varchar(1) NOT NULL,
  `videography` varchar(1) NOT NULL,
  `decoration` varchar(1) NOT NULL,
  `location` varchar(1) NOT NULL,
  PRIMARY KEY (`spId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (15,'Y','Y','Y','Y','Y'),(16,'Y','Y','Y','Y','Y');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(6) NOT NULL,
  PRIMARY KEY (`userId`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'VH','$2y$10$FF/ELC.6uMw6nFky8wwPd.Jh1fNQXU1UFYT8T.vErBhjJxnZi40E6','User'),(2,'V_H','$2y$10$F76wlRhGixwJqlk1fS9mJeosUSbjTpmLD9xQOe5EFi/ijanIq8lbW','User'),(12,'har','123','Admin'),(13,'har','123','Admin'),(14,'Thisuri','123','Vendor'),(15,'Yohombu','123','Vendor'),(16,'Shanika','123','Vendor');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdetail`
--

DROP TABLE IF EXISTS `userdetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userdetail` (
  `userId` int NOT NULL,
  `email` varchar(45) NOT NULL,
  `fName` varchar(45) NOT NULL,
  `lName` varchar(45) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL,
  `contactNo` int NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`userId`,`email`),
  CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdetail`
--

LOCK TABLES `userdetail` WRITE;
/*!40000 ALTER TABLE `userdetail` DISABLE KEYS */;
INSERT INTO `userdetail` VALUES (1,'harshaabeyvickrama@gmail.com','Harsha','Abeyvickrama','M','1998-08-29',711425085,'testAddress'),(2,'projectyt2146@gmail.com','Harsha','Abeyvickrama','M','2021-02-02',711425085,'testAddress'),(12,'vha@gmail.com','vh','abey','M','1998-08-29',123456,'rawkana'),(13,'vha@gmail.com','vh','abey','M','1998-08-29',123456,'rawkana');
/*!40000 ALTER TABLE `userdetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendor` (
  `spId` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contactNo` int NOT NULL,
  PRIMARY KEY (`spId`),
  CONSTRAINT `usrId` FOREIGN KEY (`spId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor`
--

LOCK TABLES `vendor` WRITE;
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
INSERT INTO `vendor` VALUES (1,'vh_tech','Rakwana','harsha@gmail.com',711425085),(2,'vh','Rakwana','vh@gmail.com',711425085),(14,'Thisuri Stores','Mathara','thisu@gmail.com',452278945),(15,'Dula Stores','Pokunuwita','dula@gmail.com',452278945),(16,'Shani Stores','Pokunuwita','snai96@gmail.com',452278945);
/*!40000 ALTER TABLE `vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videography`
--

DROP TABLE IF EXISTS `videography`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videography` (
  `pId` int NOT NULL AUTO_INCREMENT,
  `spId` int NOT NULL,
  `type` varchar(45) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`pId`,`spId`,`type`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videography`
--

LOCK TABLES `videography` WRITE;
/*!40000 ALTER TABLE `videography` DISABLE KEYS */;
INSERT INTO `videography` VALUES (14,0,'hiii',450,'450');
/*!40000 ALTER TABLE `videography` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videographybooking`
--

DROP TABLE IF EXISTS `videographybooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videographybooking` (
  `bookingId` int NOT NULL,
  `spId` varchar(45) NOT NULL,
  `albumType` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bookingId`,`spId`),
  CONSTRAINT `bId` FOREIGN KEY (`bookingId`) REFERENCES `booking` (`bookingId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videographybooking`
--

LOCK TABLES `videographybooking` WRITE;
/*!40000 ALTER TABLE `videographybooking` DISABLE KEYS */;
INSERT INTO `videographybooking` VALUES (57,'',''),(58,'',''),(59,'',''),(61,'','');
/*!40000 ALTER TABLE `videographybooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database '1108'
--

--
-- Dumping routines for database '1108'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-05 17:47:58
