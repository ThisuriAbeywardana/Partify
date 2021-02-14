-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: partify
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admindetail`
--

DROP TABLE IF EXISTS `admindetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admindetail` (
  `adminId` int NOT NULL,
  `email` varchar(45) NOT NULL,
  `fName` varchar(45) NOT NULL,
  `lName` varchar(45) NOT NULL,
  `contactNo` int NOT NULL,
  PRIMARY KEY (`adminId`,`email`),
  CONSTRAINT `adminId` FOREIGN KEY (`adminId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admindetail`
--

LOCK TABLES `admindetail` WRITE;
/*!40000 ALTER TABLE `admindetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `admindetail` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photography`
--

LOCK TABLES `photography` WRITE;
/*!40000 ALTER TABLE `photography` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videography`
--

LOCK TABLES `videography` WRITE;
/*!40000 ALTER TABLE `videography` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `videographybooking` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-14 22:53:26
